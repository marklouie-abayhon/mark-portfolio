# Step 1: Use the official PHP-FPM image
FROM php:8.2-fpm

# Step 2: Set working directory
WORKDIR /var/www

# Step 3: Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libicu-dev \
    libxml2-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nodejs \
    npm

# Step 4: Install PHP extensions (necessary for Laravel)
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/freetype2 --with-jpeg-dir=/usr/include \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Step 5: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 6: Copy application files
COPY . /var/www

# Step 7: Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Step 8: Install Node.js dependencies
RUN npm install

# Step 9: Build the frontend assets
RUN npm run dev

# Step 10: Set permissions for storage and cache
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Step 11: Expose port 8000 to access the Laravel app
EXPOSE 8000

# Step 12: Set the entry point for the Laravel app
CMD php artisan serve --host=0.0.0.0 --port=8000

<<<<<<< HEAD
HEAD
# Use an official PHP runtime as a parent image
FROM php:8.1-fpm
=======
FROM php:8.2-fpm
>>>>>>> 59e1cfed72820109548a18b55278d9f22b177c53

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip exif pcntl

# Install Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Copy existing application directory
COPY . /var/www

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

<<<<<<< HEAD
CMD ["php-fpm"]

# Step 1: Use an official PHP image with FPM (FastCGI Process Manager)
FROM php:8.0-fpm

# Step 2: Set the working directory in the container
WORKDIR /var/www

# Step 3: Install system dependencies required for Laravel and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Step 4: Install Composer (a PHP package manager) inside the container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Copy the application files into the container
COPY . .

# Step 6: Install PHP dependencies using Composer
RUN composer install --no-interaction --optimize-autoloader

# Step 7: Set the permissions for storage and cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Step 8: Expose port 8000 to access the Laravel development server
EXPOSE 8000

# Step 9: Start Laravel's development server (accessible from any IP address)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
 7adbbcc2e648f4632419e2a8423392dcb0a5688c
=======
# Set file permissions
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Expose port 8000 and start PHP-FPM
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
>>>>>>> 59e1cfed72820109548a18b55278d9f22b177c53

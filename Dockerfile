HEAD
# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd pdo pdo_mysql

# Set the working directory in the container
WORKDIR /var/www

# Copy the current directory contents into the container
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install

# Expose port 9000 to the outside world
EXPOSE 9000

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

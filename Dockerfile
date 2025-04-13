# Use the official PHP image with Composer
FROM php:8.2-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo mbstring exif pcntl bcmath zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /app

# Copy the entire Laravel project into the container
COPY . .

# Install PHP dependencies with Composer
RUN composer install --no-dev --optimize-autoloader

# Clear and cache Laravel config (optional)
RUN php artisan config:clear

# Set permissions for storage and cache
RUN chmod -R 777 storage bootstrap/cache

# Expose the port Laravel will run on
EXPOSE 10000

# Start Laravel's built-in web server
CMD php artisan serve --host=0.0.0.0 --port=10000

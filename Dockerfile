FROM php:8.2-fpm

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

# Set file permissions
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

# Expose port 8000 and start PHP-FPM
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

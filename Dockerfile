FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    supervisor \
    unzip \
    curl \
    git \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application source
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copy custom Nginx and Supervisor configurations
COPY nginx.conf /etc/nginx/nginx.conf
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf  # Adjust PHP version if needed
COPY supervisord.conf /etc/supervisor/supervisord.conf

# Expose ports for Nginx and PHP-FPM
EXPOSE 80 9000

# Start Supervisor to manage Nginx and PHP-FPM
CMD ["/usr/bin/supervisord"]

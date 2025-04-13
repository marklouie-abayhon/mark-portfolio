FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    nginx \
    curl \
    git \
    unzip \
    libzip-dev \
    zip \
    supervisor \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Copy nginx config
COPY nginx.conf /etc/nginx/sites-available/default

# Supervisor config
RUN mkdir -p /var/log/supervisor
RUN echo "[supervisord]
nodaemon=true

[program:php-fpm]
command=/usr/local/sbin/php-fpm

[program:nginx]
command=/usr/sbin/nginx -g 'daemon off;'" > /etc/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

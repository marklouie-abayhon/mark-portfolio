# Use official PHP image with necessary extensions
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    nginx \
    supervisor \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libmcrypt-dev \
    libpq-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application files
COPY . /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# NGINX config
COPY ./nginx/default.conf /etc/nginx/sites-available/default

# Supervisor config
RUN mkdir -p /etc/supervisor \
    && echo "[supervisord]\nnodaemon=true\n\n[program:php-fpm]\ncommand=/usr/local/sbin/php-fpm\n\n[program:nginx]\ncommand=/usr/sbin/nginx -g 'daemon off;'" > /etc/supervisor/supervisord.conf

# Expose HTTP port
EXPOSE 80

# Run supervisor to manage php-fpm and nginx
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

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
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Supervisor config
RUN mkdir -p /etc/supervisor && \
    cat > /etc/supervisor/supervisord.conf <<EOF
[supervisord]
nodaemon=true
user=www-data

[program:php-fpm]
command=/usr/local/sbin/php-fpm
user=www-data
autostart=true
autorestart=true
stderr_logfile=/var/log/php-fpm.err.log
stdout_logfile=/var/log/php-fpm.out.log

[program:nginx]
command=/usr/sbin/nginx -g 'daemon off;'
user=www-data
autostart=true
autorestart=true
stderr_logfile=/var/log/nginx.err.log
stdout_logfile=/var/log/nginx.out.log
EOF

# Expose HTTP port
EXPOSE 80

# Run Supervisor to manage services
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]

FROM composer:2.6 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

COPY . ./
RUN composer dump-autoload --optimize

# Node build for Vite
FROM node:18 AS frontend

WORKDIR /app

COPY . ./
RUN npm install
RUN npm run build

# Final Laravel container
FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y unzip libzip-dev sqlite3 libsqlite3-dev git
RUN docker-php-ext-install pdo pdo_sqlite zip

COPY --from=vendor /app /var/www/html
COPY --from=frontend /app/public/build /var/www/html/public/build

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]

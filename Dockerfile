# Step 1: Use Node.js image
FROM node:16 AS frontend

# Set the working directory for frontend assets
WORKDIR /var/www/frontend

# Copy the application files to the container
COPY . ./

# Install npm dependencies
RUN npm install

# Run build to generate production assets
RUN npm run build  # This command is mapped to npm run production or npm run prod in package.json

# Step 2: Use PHP with Laravel for the backend
FROM php:8.0-fpm AS backend

# Set the working directory for the backend
WORKDIR /var/www/backend

# Copy the backend files to the container
COPY . ./

# Install the PHP extensions required for Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Step 3: Final image, serve both frontend and backend
FROM php:8.0-apache

# Set the working directory in the final image
WORKDIR /var/www

# Copy the frontend build files to the Apache web directory
COPY --from=frontend /var/www/frontend/public /var/www/html

# Copy the backend files
COPY --from=backend /var/www/backend /var/www/html

# Expose the required port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]

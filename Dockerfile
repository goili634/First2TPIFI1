# Use the official PHP 8.2 image
FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files to the container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

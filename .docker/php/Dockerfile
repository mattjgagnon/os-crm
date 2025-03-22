# .docker/php/Dockerfile
FROM php:8.3-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Change Apache DocumentRoot to /var/www/html/public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

WORKDIR /var/www/html

# Install system dependencies and Composer prerequisites
RUN apt-get update && apt-get install -y --no-install-recommends \
    unzip \
    curl && \
    rm -rf /var/lib/apt/lists/*

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist

# Copy the rest of the application
COPY . .

# Set file permissions for Apache
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

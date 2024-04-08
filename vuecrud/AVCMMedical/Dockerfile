# Use the official PHP image as a base
FROM php:8.1-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    zip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy Composer files and install dependencies
COPY ./AVCMMedical/composer.json ./AVCMMedical/composer.lock /var/www/html/
RUN composer install --no-scripts --no-autoloader

# Copy the Laravel application files
COPY . /var/www/html/


# Generate the Laravel application key
RUN php artisan key:generate

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]

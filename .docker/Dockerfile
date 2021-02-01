# Get Php 7.4 Apache
FROM php:7.4-apache

# Read Arguments from docker-compose.yaml
ARG user
ARG uid

# Set working directory
WORKDIR /var/www/html

# development packages
RUN apt-get update && apt-get install -y \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        zip \
        curl \
        unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

# Move vhost.conf
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Add User
RUN useradd -u 1000 -m dukejib
# Add User to groups
RUN usermod -a -G www-data,root dukejib
# Change User primary group to www-data
RUN usermod -g www-data dukejib
# This line makes www-data the owner of existing dir /var/www
# anything, which will be made should be here
RUN chown -R www-data:www-data /var/www
RUN chmod -R ug+rwx /var/www/
RUN a2enmod rewrite

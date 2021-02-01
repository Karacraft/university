#!/bin/bash

# Change access rights for the Laravel folders
# in order to make Laravel able to access
# cache and logs folder.

# chmod -R ug+rwx /var/www/
chmod -R ug+rwx storage/ bootstrap/cache

# Create log file for Laravel and give it write access
# www-data is a standard apache user that must have an
# access to the folder structure

chmod -R 777 storage/logs
chown -R dukejib:www-data storage/
chmod 644 /var/www/html/.htacess
chmod 755 /var/www/html
# Use composer
echo "Composer install & setting up..."
composer install && \
php artisan cache:clear  && \
php artisan route:clear && \
php artisan config:clear  && \
php artisan view:clear  && \
php artisan config:cache

echo "Done..."

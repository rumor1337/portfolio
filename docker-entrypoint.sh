#!/bin/sh
set -e
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/testing \
    storage/framework/views storage/logs storage/app bootstrap/cache
touch "${DB_DATABASE:-database/database.sqlite}"
php artisan migrate --force
chown -R www-data:www-data storage bootstrap/cache "${DB_DATABASE:-database/database.sqlite}"
exec "$@"

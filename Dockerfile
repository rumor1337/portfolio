# shortcut: no node stage — views use static files from public/, add one when @vite appears
FROM composer:2 AS deps
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-scripts
COPY . .

FROM php:8.5-apache
WORKDIR /var/www/html
COPY --from=deps /app .
RUN a2enmod rewrite \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
    && sed -ri 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -ri '/<Directory \/var\/www\/>/,/<\/Directory>/ s|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf \
    && mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/testing storage/framework/views storage/logs storage/app bootstrap/cache \
    && php artisan package:discover \
    && chown -R www-data:www-data storage bootstrap/cache database
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod 755 /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]

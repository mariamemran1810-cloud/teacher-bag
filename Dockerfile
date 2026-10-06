FROM php:8.3-apache

RUN apt-get update && apt-get install -y git unzip libzip-dev libonig-dev libpq-dev default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql mbstring zip \
    && a2enmod rewrite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . /var/www/html

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -ri -e 's!<VirtualHost \*:80>!<VirtualHost *:10000>!' /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e 's!<VirtualHost \*:443>!<VirtualHost *:10000>!' /etc/apache2/sites-available/default-ssl.conf

EXPOSE 10000
CMD php artisan migrate --force && apache2-foreground

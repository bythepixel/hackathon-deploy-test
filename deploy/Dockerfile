FROM php:7.4.3-apache

COPY .. /app

COPY .vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /app && a2enmod rewrite

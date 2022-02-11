FROM php:5.3.29-apache

ENV PHP_INI_SCAN_DIR=/usr/local/etc/php/conf.d

# PHP 5.3 にインストールできる Xdebug の最大バージョンは 2.2.7
# php:5.3.29-apache イメージでは docker-php-ext-enable xdebug が使用不可
RUN pecl install xdebug-2.2.7

COPY ./src /var/www/html
COPY ./docker/app/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

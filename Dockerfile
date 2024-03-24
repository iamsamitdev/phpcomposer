# Docker for php apache
FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mysqli

RUN mkdir -p /var/www/html/vendor/mpdf/mpdf/src/Config/../../tmp/mpdf \
    && chown -R www-data:www-data /var/www/html/vendor/mpdf/mpdf/src/Config/../../tmp/mpdf

COPY . /var/www/html
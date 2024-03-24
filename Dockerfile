# Docker for php apache
FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mysqli
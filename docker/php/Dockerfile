FROM php:7.1-fpm

RUN apt-get update && apt-get install -y \
        curl \
        git \
        zip \
        unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

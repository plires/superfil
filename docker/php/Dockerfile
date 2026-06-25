FROM php:8.1-fpm-alpine

RUN apk add --no-cache \
        icu-dev \
        oniguruma-dev \
        libzip-dev \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        zip \
        intl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

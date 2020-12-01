ARG PHP_VERSION=apache
FROM php:${PHP_VERSION}

COPY . /var/www/html

# install composer
RUN apt-get update && apt-get -y --no-install-recommends install git \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# COPY . /var/www/html

EXPOSE 80
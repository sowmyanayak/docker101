ARG PHP_VERSION=apache
FROM php:${PHP_VERSION}

# Install composer in /usr/lib folder
WORKDIR /usr/lib
RUN apt-get update && apt-get -y --no-install-recommends install git \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/lib/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*
WORKDIR /var/www/html

COPY . /var/www/html
	
EXPOSE 80
ARG PHP_VERSION=apache
FROM php:${PHP_VERSION}

ENV TEST_VAR my_test_val

# install composer
RUN apt-get update && apt-get -y --no-install-recommends install git \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get install zip unzip \
    && /usr/bin/composer require phpmailer/phpmailer

COPY . /var/www/html
	
EXPOSE 80
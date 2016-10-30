# Set the base image to
FROM php:5.6-apache

RUN apt-get update && apt-get install -y git \
    vim phpunit php5-tidy php5-mongo wget php5-imagick \
    memcached ntp wget subversion libmagickwand-dev libtidy-dev\
    libmagickcore-dev libcurl4-openssl-dev pkg-config libssl-dev

COPY config/php.ini /usr/local/etc/php/

RUN pecl install imagick && docker-php-ext-enable imagick
RUN pecl install mongo && docker-php-ext-enable mongo

RUN mkdir ~/redis
WORKDIR ~/redis
RUN wget  https://pecl.php.net/get/redis-2.2.8.tgz
RUN tar zxpf redis-2.2.8.tgz && cd redis-2.2.8 && phpize && ./configure && make && make install

RUN docker-php-ext-enable redis
RUN docker-php-ext-install tidy
RUN docker-php-ext-install bcmath

WORKDIR /var/www/html/
ENV APP_ENV vagrant-v4
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN rm -rf ~/redis

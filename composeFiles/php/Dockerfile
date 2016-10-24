# Set the base image to redis
FROM php:5.6-apache
RUN apt-get update && apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev
RUN pecl install mongodb
RUN echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongodb.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# COPY config/php.ini /usr/local/etc/php/
# COPY src/ /var/www/html/
# RUN apt-get update && apt-get install -y php5-mongo \
#     && pecl install mongodb \
#     && docker-php-ext-enable memcached

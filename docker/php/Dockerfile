FROM php:8.2-fpm
RUN apt-get -y update && apt-get -y install unzip
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www/html
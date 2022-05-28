FROM php:8.0-apache
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN apt-get update && apt-get upgrade -y
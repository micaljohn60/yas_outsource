FROM php:8.2.8-apache

LABEL maintainer="Harry micaljohn60@gmail.com" \
      version="1.0"

COPY --chown=www-data:www-data . /srv/app

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf 

WORKDIR /srv/app

RUN docker-php-ext-install pdo pdo_mysql \ 
    && a2enmod rewrite negotiation \
    && docker-php-ext-install opcache
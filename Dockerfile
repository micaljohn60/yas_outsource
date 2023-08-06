# FROM php:8.2.8-apache
# RUN apt-get update -y && apt-get install -y openssl zip unzip git curl libpng-dev libonig-dev libxml2-dev
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
# RUN ln -sf /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf 
# RUN a2enmod rewrite
# RUN service apache2 restart
# WORKDIR /var/www/app/
# COPY . /var/www/app
# RUN chmod -R o+w /var/www/app/storage
# RUN chown -R www-data:www-data ./storage
# RUN chgrp -R www-data storage bootstrap/cache
# RUN chmod -R ug+rwx storage bootstrap/cache
# RUN chmod -R 755 /var/www/app/
# RUN find /var/www/app/ -type d -exec chmod 775 {} \;
# RUN chown -R www-data:www-data­ /var/www
# RUN composer install --no-scripts --no-autoloader --no-ansi --no-interaction --working-dir=/var/www/app
# RUN docker-php-ext-install mbstring pdo pdo_mysql mbstring exif pcntl bcmath gd opcache

FROM php:8.2.8-apache

LABEL maintainer="Harry micaljohn60@gmail.com" \
      version="1.0"

COPY --chown=www-data:www-data . /srv/app

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf 

WORKDIR /srv/app

RUN docker-php-ext-install pdo pdo_mysql \ 
    && a2enmod rewrite negotiation \
    && docker-php-ext-install opcache
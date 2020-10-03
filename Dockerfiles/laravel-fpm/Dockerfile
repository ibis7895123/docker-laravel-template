FROM php:7.4-fpm

LABEL maintainer="toki"

ARG LARAVEL_PROJECT_ROOT
RUN echo ${LARAVEL_PROJECT_ROOT}

RUN apt-get update -y && apt-get install -y \
    libpq-dev \
    libmcrypt-dev \
    default-mysql-client \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    zlib1g-dev \
    libzip-dev\
    zip \
    unzip \
    git \
    libxrender1 libfontconfig1 libxext6 fonts-ipafont\
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip\
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update
RUN composer global require hirak/prestissimo
COPY ./Dockerfiles/laravel-fpm/php.ini /usr/local/etc/php/conf.d/php.ini
COPY . /var/www/

RUN chmod -R 777 /var/www/${LARAVEL_PROJECT_ROOT}/storage
RUN chmod -R 775 /var/www/${LARAVEL_PROJECT_ROOT}/bootstrap/cache

WORKDIR /var/www/${LARAVEL_PROJECT_ROOT}/
RUN composer install
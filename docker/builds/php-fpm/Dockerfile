FROM php:7.0-fpm

WORKDIR /var/www

ADD php.ini /usr/local/etc/php/conf.d/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install zip unzip -y

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmemcached-dev \
    curl \
    libldb-dev \
    libpng12-dev \
    libssl-dev \
    libmcrypt-dev \
    libldap2-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    --no-install-recommends \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install mcrypt mysqli pdo_mysql gd mbstring ldap \
    && pecl install memcached \
    && docker-php-ext-enable memcached


RUN yes | pecl install xdebug
ADD xdebug.ini /usr/local/etc/php/conf.d/





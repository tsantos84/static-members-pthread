FROM php:5-zts

MAINTAINER Tales Santos <tales.augusto.santos@gmail.com>

RUN pecl install pthreads-2.0.10 \
    && docker-php-ext-enable pthreads
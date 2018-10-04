FROM php:7.2-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip && \
    apt-get install iputils-ping -y && \
    apt-get update && apt-get install -y vim

RUN curl --silent --show-error https://getcomposer.org/installer | php
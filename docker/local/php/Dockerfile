FROM php:7.4-apache

# Install required software
RUN apt-get update && apt-get install -y git zip unzip libzip-dev libicu-dev libxml2-dev
RUN docker-php-ext-install mysqli zip intl xml
RUN a2enmod rewrite

# Set server timezone
ENV TZ America/Chicago
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

FROM phpmyadmin:5.0.4-apache

# Set server timezone
ENV TZ America/Chicago
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

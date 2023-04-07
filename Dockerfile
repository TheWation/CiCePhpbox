FROM php:5.6-apache

RUN apt-get update && \
    apt-get install -y git dnsutils iputils-ping curl python3 && \
    rm -rf /var/lib/apt/lists/*

RUN git clone https://github.com/TheWation/CiCePhpbox.git /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80/tcp
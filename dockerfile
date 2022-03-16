ARG PHP_VERSION=7.3-apache

FROM php:${PHP_VERSION}
COPY src/ /var/www/html/

CMD /bin/bash

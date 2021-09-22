FROM alpine:3.12

RUN apk update && \
    apk add wget \
    php7-fpm php7-mysqli;
# 
WORKDIR /var/www/

RUN wget wget http://wordpress.org/latest.tar.gz && \
    tar -xvf latest.tar.gz && \
    rm -rf latest.tar.gz ;

RUN chown -R www-data:www-data /var/www/wordpress

COPY ./conf/wp-config.php /var/www/wordpress/wp-config.php

EXPOSE 9000

CMD ["php-fpm7", "-F"]


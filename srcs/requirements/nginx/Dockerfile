FROM alpine:3.12
RUN apk add nginx; \
    mkdir /run/nginx/; \
    echo "<h1>Welcome !</h1>" > /var/www/localhost/htdocs/index.html;

ADD ./conf/default.conf /etc/nginx/conf.d/default.conf

ADD ./conf/*.key /etc/ssl/private/
ADD ./conf/*.crt /etc/ssl/certs/

WORKDIR /var/www/localhost/htdocs

COPY ./conf/entrypoint.sh /usr/local/bin

RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/bin/sh", "/usr/local/bin/entrypoint.sh"]

# EXPOSE PORTS
EXPOSE 80
EXPOSE 443

# RUN COMMAND
CMD ["nginx -g 'daemon off;'; nginx -s reload;"]
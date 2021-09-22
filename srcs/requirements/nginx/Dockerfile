FROM alpine:3.12
RUN apk add nginx; \
    mkdir /run/nginx/;

ADD ./conf/default.conf /etc/nginx/conf.d/default.conf

ADD ./conf/*.key /etc/ssl/private/
ADD ./conf/*.crt /etc/ssl/certs/

# EXPOSE PORTS
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
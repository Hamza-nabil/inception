FROM alpine:3.12

RUN apk update && \
    apk add mariadb mariadb-client
RUN mysql_install_db \
    --user=mysql      \
    --datadir=/var/lib/mysql \
    --auth-root-authentication-method=normal

# RUN adduser hnabil
COPY ./conf/my.cnf /etc/
COPY ./conf/entrypoint.sh /

EXPOSE 3306

ENTRYPOINT ["./entrypoint.sh"]

CMD ["/usr/bin/mysqld", "--user=mysql", "--skip-name-resolve" , "--init-file=/tmp/init" , "--debug-gdb"]
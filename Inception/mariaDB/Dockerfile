FROM debian:11
RUN apt-get -y update && apt-get install -y mariadb-server
RUN mkdir -p /run/mysqld/
RUN chown -R mysql:root /run/mysqld/
LABEL version="1.0"
LABEL description="MariaDB Server"
HEALTHCHECK --start-period=5m \
  CMD mariadb -e 'SELECT @@datadir;' || exit 1

RUN sed -i 's/bind-address            = 127.0.0.1/bind-address            = 0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

COPY /script/script.sh /

# RUN mysql_secure_installation
# RUn mysql -u root -p
# RUN pw
# RUN create database wordpress_db default character set utf8 collate utf8_unicode_ci;
# RUN create user 'chia'@'local' identified by 'pw';
# RUN grant all privileges on wordpress_db TO 'chia'@'local';
# RUN flush privileges;
# RUN exit
# CMD ["mariadbd"]
CMD ["bash", "/script.sh"]
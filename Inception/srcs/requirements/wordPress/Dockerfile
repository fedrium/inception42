FROM debian:11
RUN apt-get -y update && apt-get install -y wordpress
RUN apt-get install -y wget vim curl
RUN apt-get install -y php-fpm php-mysql
RUN mkdir -p /var/www/
RUN cd /var/www
RUN apt-get -y update && apt-get -y install wget
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN rm latest.tar.gz
RUN chown -R www-data:www-data wordpress
RUN find wordpress/ -type d -exec chmod 755 {} \;
RUN find wordpress/ -type f -exec chmod 644 {} \;

COPY /script/script.sh /
COPY /config/wp-config.php /

CMD [ "/script.sh" ]
# CMD [ "tail", "-f", "/dev/null" ]
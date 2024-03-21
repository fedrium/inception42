FROM debian:11
RUN  apt-get -y update && apt-get -y install nginx && apt-get -y install openssl
COPY /files/default /etc/nginx/sites-available/
COPY /files/nginx.conf /etc/nginx/
COPY /script/script.sh /
EXPOSE 443

CMD ["/script.sh"]
# CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
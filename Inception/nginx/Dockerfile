FROM debian:11
RUN  apt-get -y update && apt-get -y install nginx
COPY files/default /etc/nginx/sites-available/default
COPY files/index.html 42/Inception/nginx/files
EXPOSE 80
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
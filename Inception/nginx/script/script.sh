#!/bin/bash

#create ssl cert 
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MY/ST=KL/L=Sunway/O=42KL/OU=cadet/CN=cyu-xian"

nginx -g "daemon off;"
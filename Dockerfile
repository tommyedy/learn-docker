FROM php:7.4.22-apache
COPY ./index.php /var/www/html/myapp
WORKDIR /var/www/html/myapp
CMD [ "php", "./index.php" ]
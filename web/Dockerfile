FROM php:7.2-apache
#COPY ./  /var/www/html/
RUN apt-get update

RUN apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql pgsql

RUN a2enmod rewrite
#RUN apt-get update
### Install PDO and PGSQL Drivers

#RUN chmod +x /app/index.php
#EXPOSE 80
#CMD [ "php" , "index.php" ]
#COPY ./ ./
#RUN chmod +x /index.php
#CMD php /index.php
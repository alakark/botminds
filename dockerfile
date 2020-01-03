FROM wordpress:php7.1-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY . /var/www/html
COPY . /var/www/html/wp-content/
COPY . /wp-config.php
EXPOSE 80
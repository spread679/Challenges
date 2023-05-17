FROM php:5.6-apache
RUN mkdir /var/www/01
RUN echo "rfi{boooom}" > /etc/apache2/flag.txt
COPY ./index.php /var/www/01/
COPY ./conf/php/php.ini /usr/local/etc/php/
COPY ./conf/apache2 /etc/apache2/
RUN service apache2 restart
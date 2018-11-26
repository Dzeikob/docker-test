FROM php:apache
COPY api-service/ /var/www/html/
COPY site/ /var/www/html/

RUN rm -rf /etc/apache2/mods-enabled/mpm_event.load
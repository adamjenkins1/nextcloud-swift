FROM nextcloud:18.0.4-apache
COPY config/* /usr/src/nextcloud/config/
CMD ["apache2-foreground"]

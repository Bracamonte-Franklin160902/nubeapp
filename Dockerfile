FROM php:8.2-apache

# Instalar extensiones necesarias para PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Copiar todos los archivos del proyecto al servidor Apache
COPY . /var/www/html/

# Dar permisos a la carpeta uploads
RUN chmod -R 777 /var/www/html/uploads

EXPOSE 80
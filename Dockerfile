FROM php:7.0-apache

# Instala extenção docker PDO
RUN docker-php-ext-install pdo pdo_mysql
#Habilita o uso do .htaccess
RUN a2enmod rewrite

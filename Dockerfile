FROM php:8.2-apache

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar extensiones comunes de PHP si las necesitas (ej: pdo_mysql para bases de datos)
RUN docker-php-ext-install pdo pdo_mysql

# Copiar los archivos de tu proyecto al servidor
COPY . /var/www/html/

# Entrar a la carpeta y ejecutar Composer
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

# Configurar el puerto para Render
ENV PORT=80
EXPOSE 80

RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf
FROM php:8.2-apache

# Actualizar el sistema e instalar herramientas necesarias (como unzip y git que Composer usa mucho)
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer de forma oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar los archivos de tu proyecto al servidor
COPY . /var/www/html/

# Asegurar permisos correctos para que Apache y Composer puedan trabajar
RUN chown -R www-data:www-data /var/www/html

# Entrar a la carpeta y ejecutar Composer con banderas de compatibilidad
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Configurar el puerto dinámico para Render
ENV PORT=80
EXPOSE 80

RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf
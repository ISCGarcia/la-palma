FROM php:8.2-apache

# Instalar herramientas y extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    libpng-dev \
    && docker-php-ext-install zip pdo pdo_mysql gd

# Habilitar el módulo de reescritura de Apache (Crucial para las rutas de Laravel)
RUN a2enmod rewrite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar todo el proyecto al servidor
COPY . /var/www/html/

# Configurar Apache para que apunte a la carpeta /public de Laravel (donde está el index.php)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Dar permisos a las carpetas de almacenamiento de Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Ejecutar Composer para instalar las dependencias de PHP
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Configurar el puerto dinámico para Render
ENV PORT=80
EXPOSE 80
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf
ENV APP_KEY="base64:o9vr26l6/aFEOBCDMNU8QK228lhp273oSoYsvo7OFFY="
ENV APP_DEBUG=true
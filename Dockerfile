FROM php:8.2-apache

# Instalar herramientas básicas, extensiones de PHP y NODE.JS para Vite
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    libpng-dev \
    curl \
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y Against nodejs \
    && docker-php-ext-install zip pdo pdo_mysql gd

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar todo el proyecto al servidor
COPY . /var/www/html/

# Configurar Apache para que apunte a la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Dar permisos a las carpetas de almacenamiento de Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Cambiar al directorio de trabajo
WORKDIR /var/www/html

# 1. Instalar dependencias de PHP con Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# 2. Instalar dependencias de JS y COMPILAR VITE PARA PRODUCCIÓN
RUN if [ -f package.json ]; then npm install && npm run build; fi

# Configurar el puerto dinámico para Render
ENV PORT=80
EXPOSE 80
RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

# Mantener las variables que ya tenías instaladas
ENV APP_DEBUG=true
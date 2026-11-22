# Imagen base con PHP 8.2 y FPM
FROM php:8.5.13-fpm

# Instalación de dependencias y extensiones de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    curl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath \
    && rm -rf /var/lib/apt/lists/*


# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de la app
WORKDIR /var/www/html



# Dar permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html


CMD ["php-fpm"]


FROM php:8.3-fpm

# Installation des dépendances et de Node.js via le dépôt standard Debian
RUN apt-get update && apt-get install -y \
    nginx zip unzip git curl libpng-dev libonig-dev libxml2-dev nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring gd

WORKDIR /var/www

COPY . /var/www

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Build des assets frontend
RUN npm install && npm run build

# Droits sur le stockage Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80
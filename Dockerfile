# --- Étape 1 : Build des assets avec Node ---
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# --- Étape 2 : Environnement PHP / Laravel ---
FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    nginx zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring gd

WORKDIR /var/www

COPY . /var/www

# Copie du dossier public/build généré par l'étape Node
COPY --from=frontend /app/public/build /var/www/public/build

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Droits sur le stockage
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80
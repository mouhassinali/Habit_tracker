FROM php:8.2-fpm

# Installation des dépendances système et des extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    nginx zip unzip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring gd

WORKDIR /var/www

# Copie des fichiers du projet
COPY . /var/www

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Configuration des permissions pour Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80

# Exécution des migrations et lancement du serveur
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=80
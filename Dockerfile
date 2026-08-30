FROM php:8.3-fpm

# Installation des dépendances système et des extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définition du dossier de travail
WORKDIR /var/www/html

# Copie de l'intégralité du projet (y compris public/build compilé en local)
COPY . .

# Installation des dépendances PHP pour la production
RUN composer install --no-dev --optimize-autoloader

# Configuration des permissions pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Port d'écoute du conteneur
EXPOSE 8000

# Commande de démarrage
CMD php artisan serve --host=0.0.0.0 --port=8000
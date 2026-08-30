FROM node:22-bookworm-slim AS assets

WORKDIR /app

# Installation des dépendances JS (mise en cache si package*.json ne change pas)
COPY package.json package-lock.json ./
RUN npm ci

# Copie du reste du projet nécessaire à la compilation Vite/Tailwind
COPY . .
RUN npm run build


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
    default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définition du dossier de travail
WORKDIR /var/www/html

# Copie de l'intégralité du projet
COPY . .

# Récupération des assets Tailwind/Vite compilés à l'étape précédente
COPY --from=assets /app/public/build ./public/build

# Installation des dépendances PHP pour la production
RUN composer install --no-dev --optimize-autoloader

# Configuration des permissions pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Port d'écoute du conteneur (Render fournit sa propre valeur via $PORT)
EXPOSE 8000

# Exécution des migrations puis lancement du serveur Laravel sur le port imposé par Render
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
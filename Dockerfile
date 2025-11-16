FROM php:8.3-cli

WORKDIR /app

# Installer les dépendances système et extensions PHP
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install simplexml curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers de l'application
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Créer les dossiers nécessaires avec permissions
RUN mkdir -p storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Copier et rendre exécutable le script de démarrage
RUN chmod +x start.sh

EXPOSE 10000

CMD ["bash", "start.sh"]
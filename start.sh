#!/bin/bash

# Créer les dossiers nécessaires
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Permissions
chmod -R 775 storage bootstrap/cache

# Générer la clé si elle n'existe pas
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:placeholder" ]; then
    php artisan key:generate --force
fi

# Clear old cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimisations pour production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Démarrer le serveur
php -S 0.0.0.0:${PORT:-10000} -t public

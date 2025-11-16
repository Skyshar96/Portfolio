#!/bin/bash

# Créer les dossiers nécessaires
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Générer la clé si elle n'existe pas
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:placeholder" ]; then
    php artisan key:generate --force
fi

# Clear old cache
php artisan cache:clear || true
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

# Optimisations pour production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Démarrer Apache
apache2-foreground

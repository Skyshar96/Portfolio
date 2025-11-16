# Portfolio BTS SIO

Portfolio Laravel pour un étudiant en BTS SIO (option SLAM).

## Pages

- **Accueil** : présentation du profil et des objectifs
- **Veille technologique** : informatique quantique et cybersécurité
- **Stages** : récapitulatif des expériences professionnelles
- **Code de conduite** : engagements éthiques et professionnels

## Prérequis

- PHP 8.1 ou supérieur
- Composer

## Installation

```bash
# Installer les dépendances
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Créer les dossiers nécessaires
mkdir -p storage/framework/{cache,sessions,views} storage/logs
chmod -R 775 storage bootstrap/cache
```

## Lancer le site

```bash
php artisan serve
```

Accéder au site : http://127.0.0.1:8000

## Structure

- `app/` : Controllers et logique métier
- `resources/views/` : Templates Blade
- `routes/web.php` : Définition des routes
- `public/` : Point d'entrée et assets statiques
- `config/` : Fichiers de configuration Laravel

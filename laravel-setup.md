# 🚀 Migration vers Laravel - Portfolio BTS SIO

## Installation Laravel

### Option 1 : Installation rapide (recommandée)
```bash
# Depuis le dossier parent
cd /home/skydix/Desktop/Sites/
composer create-project laravel/laravel portfolio-laravel
cd portfolio-laravel

# Copier les assets et vues
cp -r ../portfolio/assets public/
mkdir -p resources/views/partials
cp ../portfolio/partials/* resources/views/partials/
cp ../portfolio/index.php resources/views/home.blade.php
cp ../portfolio/veille.php resources/views/veille.blade.php
cp ../portfolio/stages.php resources/views/stages.blade.php
cp ../portfolio/code_conduite.php resources/views/code-conduite.blade.php
```

### Option 2 : Migration manuelle (si Laravel existe déjà)
```bash
cd /home/skydix/Desktop/Sites/portfolio

# Créer la structure Laravel
mkdir -p resources/views/partials
mkdir -p resources/views/layouts
mkdir -p public/assets/css
mkdir -p app/Http/Controllers

# Déplacer les fichiers
mv assets/css/style.css public/assets/css/
```

## Structure Laravel à créer

### 1. Layout principal : `resources/views/layouts/app.blade.php`
```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio BTS SIO')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('partials.header')
    
    <main class="site-main">
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    @include('partials.footer')
</body>
</html>
```

### 2. Header : `resources/views/partials/header.blade.php`
```php
<header class="site-header" id="mainHeader">
    <div class="container">
        <div class="branding">
            <a href="{{ route('home') }}" class="logo">BTS SIO — Mon Portfolio</a>
            <p class="tagline">Solutions Logicielles & Support aux Organisations</p>
        </div>
        <nav class="main-nav" aria-label="Navigation principale">
            <ul>
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="{{ request()->routeIs('veille') ? 'active' : '' }}" href="{{ route('veille') }}">Veille techno</a></li>
                <li><a class="{{ request()->routeIs('stages') ? 'active' : '' }}" href="{{ route('stages') }}">Stages</a></li>
                <li><a class="{{ request()->routeIs('code-conduite') ? 'active' : '' }}" href="{{ route('code-conduite') }}">Code de conduite</a></li>
            </ul>
        </nav>
    </div>
</header>
```

### 3. Routes : `routes/web.php`
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/veille', [PortfolioController::class, 'veille'])->name('veille');
Route::get('/stages', [PortfolioController::class, 'stages'])->name('stages');
Route::get('/code-conduite', [PortfolioController::class, 'codeConduite'])->name('code-conduite');
```

### 4. Controller : `app/Http/Controllers/PortfolioController.php`
```php
<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home', [
            'pageTitle' => 'Accueil — Portfolio BTS SIO'
        ]);
    }

    public function veille()
    {
        return view('veille', [
            'pageTitle' => 'Veille technologique — Portfolio BTS SIO'
        ]);
    }

    public function stages()
    {
        return view('stages', [
            'pageTitle' => 'Stages — Portfolio BTS SIO'
        ]);
    }

    public function codeConduite()
    {
        return view('code-conduite', [
            'pageTitle' => 'Code de conduite — Portfolio BTS SIO'
        ]);
    }
}
```

## Commandes Laravel

```bash
# Lancer le serveur de développement
php artisan serve

# Accéder au site
# http://localhost:8000

# Créer le controller
php artisan make:controller PortfolioController

# Vider le cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Optimiser pour la production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Avantages de la migration Laravel

✅ **Routing moderne** avec nommage des routes
✅ **Blade templating** plus puissant que PHP natif
✅ **Assets compilation** avec Vite (optionnel)
✅ **Sécurité** CSRF protection intégrée
✅ **Organisation** structure MVC claire
✅ **Évolutivité** facile d'ajouter DB, authentification, etc.

## Notes importantes

- Le style flottant est déjà implémenté dans le CSS
- JavaScript pour l'animation au scroll ajouté
- La navbar change d'apparence au scroll (classe `.scrolled`)
- Tous les composants ont du glassmorphism (backdrop-filter)

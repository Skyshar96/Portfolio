# 📁 STRUCTURE DU PROJET - Portfolio Multi-pages

## 🗂️ Organisation des fichiers

```
test/
├── index.php                    # ⭐ Page d'accueil principale
├── .htaccess                    # Configuration Apache
├── README.md                    # Documentation
├── START.md                     # Guide de démarrage
├── NAVIGATION.md                # Guide de navigation
├── STRUCTURE.md                 # Ce fichier
│
├── pages/                       # 📄 Pages du site
│   ├── experience.php           # Page Expérience + Compétences
│   ├── projects.php             # Page Projets (6 projets)
│   └── contact.php              # Page Contact + Formulaire
│
├── includes/                    # 🔧 Composants réutilisables
│   ├── header.php               # Header pour les pages internes
│   ├── footer.php               # Footer pour les pages internes
│   ├── header-home.php          # Header pour la page d'accueil
│   └── footer-home.php          # Footer pour la page d'accueil
│
├── assets/                      # 🎨 Ressources statiques
│   ├── css/
│   │   └── style.css            # Styles CSS du site
│   ├── js/
│   │   └── script.js            # JavaScript du site
│   └── images/                  # Dossier pour vos images
│       └── (vos images ici)
│
└── api/                         # ⚙️ Scripts de traitement
    ├── send_email.php           # Traitement du formulaire
    └── contact_handler.php      # Handler alternatif

```

## 🌐 URLs du site

### Page d'accueil
- `http://localhost/test/` ou `http://localhost/test/index.php`

### Pages internes
- `http://localhost/test/pages/experience.php`
- `http://localhost/test/pages/projects.php`
- `http://localhost/test/pages/contact.php`

## 🔗 Chemins d'inclusion

### Pour la page d'accueil (index.php)
```php
// Header et Footer
include 'includes/header-home.php';
include 'includes/footer-home.php';

// CSS et JS
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/script.js"></script>

// Liens vers les pages
<a href="pages/experience.php">
<a href="pages/projects.php">
<a href="pages/contact.php">
```

### Pour les pages internes (pages/*.php)
```php
// Header et Footer
include '../includes/header.php';
include '../includes/footer.php';

// CSS et JS (dans header.php et footer.php)
<link rel="stylesheet" href="../assets/css/style.css">
<script src="../assets/js/script.js"></script>

// Liens vers les pages
<a href="../index.php">        // Retour à l'accueil
<a href="experience.php">       // Page expérience
<a href="projects.php">         // Page projets
<a href="contact.php">          // Page contact
```

### Pour le formulaire de contact
```javascript
// Dans assets/js/script.js
fetch('../api/send_email.php', { ... })
```

## 📝 Comment ajouter du contenu

### 1. Ajouter une image
```
1. Placez votre image dans assets/images/
2. Utilisez-la dans votre code :
   - Page d'accueil : <img src="assets/images/votre-image.jpg">
   - Pages internes : <img src="../assets/images/votre-image.jpg">
```

### 2. Modifier le CSS
```
Éditez : assets/css/style.css
Le fichier est automatiquement chargé sur toutes les pages
```

### 3. Ajouter du JavaScript
```
Éditez : assets/js/script.js
Le fichier est automatiquement chargé sur toutes les pages
```

### 4. Créer une nouvelle page
```php
1. Créez un fichier dans pages/ (ex: pages/about.php)

2. Ajoutez en haut :
<?php 
$current_page = 'about';
$page_title = 'About - Wyatt Guemache';
include '../includes/header.php'; 
?>

3. Ajoutez votre contenu

4. Ajoutez en bas :
<?php include '../includes/footer.php'; ?>

5. Ajoutez le lien dans la navigation (includes/header.php et header-home.php)
```

## 🎯 Avantages de cette structure

### ✅ Organisation claire
- Séparation logique des fichiers
- Facile à naviguer et maintenir
- Structure professionnelle

### ✅ Réutilisabilité
- Header et footer réutilisables
- CSS et JS centralisés
- Facilite les modifications globales

### ✅ Performance
- Ressources optimisées et organisées
- Mise en cache facilitée
- Chargement rapide

### ✅ Sécurité
- API séparée dans son propre dossier
- Validation côté serveur centralisée
- Protection des fichiers sensibles

### ✅ Évolutivité
- Facile d'ajouter de nouvelles pages
- Structure extensible
- Prêt pour la production

## 🔄 Flux de navigation

```
Visiteur arrive sur index.php
    ↓
Charge header-home.php (navigation)
    ↓
Affiche le contenu de la page
    ↓
Charge footer-home.php
    ↓
Visiteur clique sur "Experience"
    ↓
Redirigé vers pages/experience.php
    ↓
Charge ../includes/header.php (navigation adaptée)
    ↓
Affiche le contenu de la page
    ↓
Charge ../includes/footer.php
```

## 🛠️ Maintenance

### Modifier le header sur toutes les pages internes
```
Éditez : includes/header.php
Impact : Toutes les pages dans pages/
```

### Modifier le header de la page d'accueil
```
Éditez : includes/header-home.php
Impact : Uniquement index.php
```

### Modifier les styles globaux
```
Éditez : assets/css/style.css
Impact : Toutes les pages du site
```

### Modifier le traitement du formulaire
```
Éditez : api/send_email.php
Impact : Formulaire de contact
```

## 📊 Taille et poids des fichiers

| Fichier | Taille approximative |
|---------|---------------------|
| index.php | ~3 KB |
| pages/*.php | ~4-8 KB chacun |
| style.css | ~15 KB |
| script.js | ~8 KB |
| Total projet | ~50-60 KB |

## 🔒 Sécurité

### Fichiers protégés
- `api/` - Scripts de traitement sécurisés
- `includes/` - Composants PHP uniquement accessibles via include

### Bonnes pratiques appliquées
- ✅ Validation côté serveur dans send_email.php
- ✅ Sanitization des inputs
- ✅ Headers de sécurité
- ✅ Protection contre les injections SQL (si DB ajoutée)

## 📈 Performance

### Optimisations en place
- CSS et JS minifiés (à faire en production)
- Images lazy loading
- Cache navigateur via .htaccess
- Compression GZIP activée

## 🚀 Déploiement

### Fichiers à modifier avant mise en ligne
1. `api/send_email.php` - Changez l'email destinataire
2. `index.php` - Mettez vos vraies informations
3. `pages/*.php` - Mettez à jour le contenu
4. `assets/images/` - Ajoutez vos vraies images
5. Tous les fichiers - Changez les liens sociaux

### Vérifications avant déploiement
- [ ] Tous les liens fonctionnent
- [ ] Toutes les images sont chargées
- [ ] Le formulaire de contact fonctionne
- [ ] La navigation est fluide
- [ ] Le site est responsive (testez sur mobile)
- [ ] Aucune erreur dans la console

## 📞 Support

Pour toute question sur la structure du projet, consultez :
- README.md - Documentation générale
- START.md - Guide de démarrage rapide
- NAVIGATION.md - Guide de navigation

---

**Structure créée le :** 15 décembre 2025
**Dernière mise à jour :** 15 décembre 2025

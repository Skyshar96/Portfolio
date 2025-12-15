# Portfolio Website - Version HTML/CSS/JS/PHP (Multi-pages)

Ce dossier contient la version HTML/CSS/JS/PHP du portfolio en **architecture multi-pages**, convertie depuis la version React/TypeScript.

## 📁 Structure des fichiers

```
site1/
├── index.php           # Page d'accueil (Hero + Quick Links)
├── experience.php      # Page Expérience + Compétences
├── projects.php        # Page Projets (6 projets)
├── contact.php         # Page Contact + Formulaire
├── header.php          # Header réutilisable (navigation)
├── footer.php          # Footer réutilisable
├── style.css           # Tous les styles CSS
├── script.js           # JavaScript pour les interactions
├── send_email.php      # Script PHP pour gérer le formulaire de contact
├── contact_handler.php # Handler original pour l'envoi d'emails
├── index.html          # Ancienne version single-page (obsolète)
└── README.md           # Ce fichier
```

## 🚀 Installation et utilisation

### Prérequis

- Un serveur web local avec support PHP (WAMP, XAMPP, MAMP, etc.)
- PHP 7.0 ou supérieur

### Configuration

1. **Placer les fichiers sur votre serveur**
   - Les fichiers sont déjà dans `c:\wamp64\www\test\site1\`
   - Assurez-vous que votre serveur WAMP est démarré

2. **Configurer le formulaire de contact**
   - Ouvrir `send_email.php`
   - Modifier la ligne 7 avec votre adresse email :
     ```php
     $to_email = "votre-email@example.com";
     ```

3. **Accéder au site**
   - Ouvrez votre navigateur
   - Allez à : `http://localhost/test/site1/index.php`

## 📄 Pages disponibles

### 1. Page d'accueil (index.php)
- Section Hero avec profil et présentation
- Liens vers réseaux sociaux
- Section "Explore" avec cartes de navigation rapide vers les autres pages

### 2. Page Expérience (experience.php)
- Timeline interactive des expériences professionnelles
- Section compétences organisée par catégories
  - Frontend (React, Next.js, TypeScript, etc.)
  - Backend (Node.js, NestJS, Go, PHP, etc.)
  - Tools & Others (Git, Docker, etc.)

### 3. Page Projets (projects.php)
- Grille de 6 projets
- Chaque projet comprend :
  - Image illustrative
  - Description
  - Technologies utilisées
  - Liens vers GitHub et démo

### 4. Page Contact (contact.php)
- Informations de contact (email, localisation, téléphone)
- Formulaire de contact fonctionnel avec validation
- Section réseaux sociaux avec liens élargis

### Effets et animations
- Animations au scroll (fade-in)
- Effets de parallax sur l'arrière-plan
- Effets de survol sur les cartes et boutons
- Effet ripple sur les boutons
- Transitions fluides

## 🎨 Personnalisation

### Couleurs
Modifiez les variables CSS dans `style.css` (lignes 9-20) :

```css
:root {
    --color-bg-primary: #0f0f0f;
    --color-accent: #22d3ee;
    /* ... autres couleurs */
}
```

### Contenu

#### Modifier vos informations personnelles

**Dans header.php** :
- Modifier le titre du site si nécessaire

**Dans index.php** (Page d'accueil) :
- Nom et titre (ligne 19)
- Photo de profil (URL de l'image, ligne 14)
- Compétences et description
- Email et informations de contact
- Liens des réseaux sociaux (lignes 34-46)

**Dans experience.php** :
- Ajouter/modifier vos expériences professionnelles
- Mettre à jour vos compétences dans les 3 catégories
- Dupliquer les blocs `.experience-item` pour ajouter des expériences

**Dans projects.php** :
- Remplacer les images des projets
- Modifier titres et descriptions
- Mettre à jour les technologies
- Changer les liens GitHub et démo

**Dans contact.php** :
- Mettre à jour l'email, la localisation, le téléphone
- Modifier les liens des réseaux sociaux

## 🎨 Personnalisation avancée

### Structure des composants

#### Header (header.php)
Le header contient :
- Navigation avec pages actives gérées via PHP
- Bouton de changement de langue
- Sticky header avec effet backdrop-filter

#### Footer (footer.php)
Footer simple avec copyright

### Ajouter une nouvelle expérience
Dans `experience.php`, dupliquez ce bloc :

```html
<div class="experience-item">
    <div class="timeline-dot"></div>
    <div class="experience-header">
        <div class="experience-company">
            <span class="company-logo">🚀</span>
            <div>
                <h3 class="company-name">Nom Entreprise</h3>
                <p class="job-title">Titre du poste</p>
            </div>
        </div>
        <span class="job-period">Période</span>
    </div>
    <p class="job-description">
        Description du poste...
    </p>
</div>
```

### Ajouter un nouveau projet
Dans `projects.php`, dupliquez ce bloc :

```html
<div class="project-card">
    <div class="project-image-container">
        <div class="project-overlay"></div>
        <img src="URL_IMAGE" alt="Nom du projet" class="project-image">
    </div>
    <div class="project-content">
        <h3 class="project-title">Titre du projet</h3>
        <p class="project-description">Description...</p>
        <div class="project-tech">
            <span class="tech-badge">Tech 1</span>
            <span class="tech-badge">Tech 2</span>
        </div>
        <div class="project-links">
            <a href="URL_GITHUB" target="_blank" class="project-link">
                <i data-lucide="github"></i>
                <span>Code</span>
            </a>
            <a href="URL_DEMO" target="_blank" class="project-link">
                <i data-lucide="external-link"></i>
                <span>Demo</span>
            </a>
        </div>
    </div>
</div>
```

## 🔧 Architecture Multi-pages

### Avantages
- ✅ SEO amélioré (une URL par page)
- ✅ Navigation plus claire
- ✅ Chargement plus rapide par page
- ✅ Facilité de maintenance
- ✅ Possibilité d'avoir des meta tags différents par page

### Navigation
La navigation active est gérée côté serveur via PHP :
```php
$current_page = 'home'; // Définit la page actuelle
```

Le header utilise cette variable pour ajouter la classe `active` au lien correspondant.
- Email et localisation
- Liens des réseaux sociaux

#### Ajouter/Modifier des expériences
Trouvez la section `.experience-timeline` et dupliquez un bloc `.experience-item` :

```html
<div class="experience-item">
    <div class="timeline-dot"></div>
    <div class="experience-header">
        <!-- ... -->
    </div>
</div>
```

#### Ajouter/Modifier des projets
Trouvez la section `.projects-grid` et dupliquez un bloc `.project-card` :

```html
<div class="project-card">
    <div class="project-image-container">
        <!-- ... -->
    </div>
    <div class="project-content">
        <!-- ... -->
    </div>
</div>
```

## 📱 Responsive Design

Le site est entièrement responsive et s'adapte aux :
- Ordinateurs de bureau (> 768px)
- Tablettes (768px - 480px)
- Smartphones (< 480px)

## 🔧 Configuration du serveur mail

Pour que le formulaire de contact fonctionne :

1. **Sur WAMP** :
   - Ouvrir `php.ini` (via l'icône WAMP > PHP > php.ini)
   - Chercher `[mail function]`
   - Configurer SMTP (ex: avec Gmail) :
     ```ini
     SMTP = smtp.gmail.com
     smtp_port = 587
     sendmail_from = votre-email@gmail.com
     ```

2. **Alternative** :
   - Utiliser un service comme SendGrid, Mailgun, ou PHPMailer
   - Remplacer la fonction `mail()` dans `contact.php`

## 🌐 Mise en production

Avant de déployer en production :

1. Remplacer les images de placeholder par vos vraies images
2. Mettre à jour tous les liens (GitHub, LinkedIn, etc.)
3. Configurer correctement l'envoi d'emails
4. Tester le formulaire de contact
5. Optimiser les images
6. Minifier CSS et JS si nécessaire

## 📦 Dépendances

### CDN utilisés
- **Lucide Icons** : `https://unpkg.com/lucide@latest`
  - Pour les icônes (GitHub, Mail, etc.)
  - Chargé via CDN, pas besoin d'installation

### Aucune installation npm requise !

## 🐛 Dépannage

### Le formulaire ne s'envoie pas
- Vérifier que PHP est actif sur votre serveur
- Vérifier la configuration SMTP dans `php.ini`
- Regarder les erreurs dans la console du navigateur
- Vérifier les logs PHP

### Les icônes ne s'affichent pas
- Vérifier votre connexion internet (icônes via CDN)
- Vérifier que le script Lucide est bien chargé

### Les animations ne fonctionnent pas
- Vérifier que `script.js` est bien chargé
- Ouvrir la console du navigateur pour voir les erreurs

## 📄 Licence

Projet personnel - Libre d'utilisation et de modification

## 📞 Support

Pour toute question : mathisdev7@gmail.com

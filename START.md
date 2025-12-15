# 🚀 DÉMARRAGE RAPIDE - Portfolio Multi-pages

## ✅ Ce qui a été créé

Votre portfolio a été transformé en **architecture multi-pages** avec 4 pages principales :

| Page | Fichier | URL | Description |
|------|---------|-----|-------------|
| 🏠 Accueil | `index.php` | `/index.php` | Page d'accueil avec présentation et quick links |
| 💼 Expérience | `experience.php` | `/experience.php` | Timeline des expériences + compétences |
| 🚀 Projets | `projects.php` | `/projects.php` | Grille de 6 projets |
| 📧 Contact | `contact.php` | `/contact.php` | Formulaire de contact + réseaux sociaux |

## 📦 Fichiers créés/modifiés

### Nouveaux fichiers PHP
- ✅ `index.php` - Page d'accueil
- ✅ `experience.php` - Page expérience
- ✅ `projects.php` - Page projets  
- ✅ `contact.php` - Page contact
- ✅ `header.php` - Header réutilisable
- ✅ `footer.php` - Footer réutilisable
- ✅ `send_email.php` - Traitement du formulaire

### Fichiers mis à jour
- ✅ `style.css` - Styles ajoutés pour les nouvelles sections
- ✅ `script.js` - JavaScript adapté pour multi-pages
- ✅ `README.md` - Documentation complète

### Fichiers de configuration
- ✅ `.htaccess` - URLs propres et optimisations
- ✅ `NAVIGATION.md` - Guide de navigation
- ✅ `START.md` - Ce fichier

### Ancien fichier
- 📄 `index.html` - Version single-page (obsolète, peut être supprimée)
- 📄 `contact_handler.php` - Ancien handler d'email (remplacé par send_email.php)

## 🎯 Pour commencer maintenant

### 1️⃣ Démarrez votre serveur WAMP
```
1. Ouvrez WAMP
2. Vérifiez que l'icône est verte (tous les services actifs)
3. Apache et MySQL doivent être en cours d'exécution
```

### 2️⃣ Accédez au site
Ouvrez votre navigateur et allez à :
```
http://localhost/test/site1/index.php
```

### 3️⃣ Testez toutes les pages
- 🏠 http://localhost/test/site1/index.php
- 💼 http://localhost/test/site1/experience.php
- 🚀 http://localhost/test/site1/projects.php
- 📧 http://localhost/test/site1/contact.php

### 4️⃣ Personnalisez le contenu

#### A. Changez vos informations personnelles
**Fichier : `index.php`**
```php
<h1 class="hero-title">Votre Nom</h1>  <!-- Ligne 19 -->
<a href="mailto:votre@email.com">      <!-- Ligne 30 -->
```

#### B. Modifiez l'email de réception
**Fichier : `send_email.php`**
```php
$to_email = "votre-email@gmail.com";  // Ligne 7
```

#### C. Ajoutez vos réseaux sociaux
**Fichiers : `index.php`, `contact.php`**
```html
<a href="https://github.com/votre-compte">  <!-- Mettez vos vrais liens -->
<a href="https://linkedin.com/in/votre-profil">
<a href="https://twitter.com/votre-compte">
```

#### D. Remplacez les images
Dans tous les fichiers PHP, remplacez :
```html
<!-- Au lieu de : -->
<img src="https://images.unsplash.com/photo-..." 

<!-- Utilisez : -->
<img src="images/votre-photo.jpg"
```

## 🎨 Personnalisation rapide des couleurs

**Fichier : `style.css` (lignes 8-22)**

Pour changer la couleur principale (cyan → votre couleur) :
```css
:root {
    --color-accent: #22d3ee;        /* Changez cette valeur */
    --color-accent-hover: #67e8f9;  /* Version plus claire */
}
```

Exemples de couleurs populaires :
- Bleu : `#3b82f6`
- Violet : `#8b5cf6`
- Rose : `#ec4899`
- Vert : `#10b981`
- Orange : `#f97316`

## 📝 Modification du contenu

### Ajouter une expérience
**Fichier : `experience.php`** (après ligne 50)
```html
<div class="experience-item">
    <div class="timeline-dot"></div>
    <div class="experience-header">
        <div class="experience-company">
            <span class="company-logo">🏢</span>
            <div>
                <h3 class="company-name">Nom Entreprise</h3>
                <p class="job-title">Votre Poste</p>
            </div>
        </div>
        <span class="job-period">Jan 2024 - Présent</span>
    </div>
    <p class="job-description">
        Description de votre expérience...
    </p>
</div>
```

### Ajouter un projet
**Fichier : `projects.php`** (après un projet existant)
```html
<div class="project-card">
    <div class="project-image-container">
        <div class="project-overlay"></div>
        <img src="votre-image.jpg" alt="Nom Projet" class="project-image">
    </div>
    <div class="project-content">
        <h3 class="project-title">Nom du Projet</h3>
        <p class="project-description">Description...</p>
        <div class="project-tech">
            <span class="tech-badge">React</span>
            <span class="tech-badge">Node.js</span>
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

## ⚙️ Configuration du formulaire de contact

### Option 1 : Configuration SMTP locale (pour tester)
**Fichier : `C:\wamp64\bin\php\php[version]\php.ini`**
```ini
[mail function]
SMTP = smtp.gmail.com
smtp_port = 587
sendmail_from = votre-email@gmail.com
```

### Option 2 : Utiliser un service d'emailing (recommandé)
Considérez l'utilisation de :
- PHPMailer
- SendGrid
- Mailgun
- AWS SES

## 🌐 URLs propres (optionnel)

Avec `.htaccess` activé, vous pouvez utiliser :
```
http://localhost/test/site1/          → Page d'accueil
http://localhost/test/site1/experience → Page expérience
http://localhost/test/site1/projects   → Page projets
http://localhost/test/site1/contact    → Page contact
```

Au lieu de :
```
http://localhost/test/site1/index.php
http://localhost/test/site1/experience.php
etc.
```

## 🚨 Checklist avant mise en ligne

- [ ] Remplacer toutes les images de placeholder
- [ ] Mettre à jour tous les liens (GitHub, LinkedIn, Twitter)
- [ ] Configurer l'email dans `send_email.php`
- [ ] Tester le formulaire de contact
- [ ] Vérifier tous les textes et descriptions
- [ ] Remplacer "Mathis Zeghouani" par votre nom partout
- [ ] Tester sur mobile (responsive)
- [ ] Optimiser les images (compresser)
- [ ] Vérifier la console pour les erreurs JavaScript

## 📚 Documentation

Pour plus de détails, consultez :
- `README.md` - Documentation complète
- `NAVIGATION.md` - Guide de navigation détaillé

## 🆘 Besoin d'aide ?

### Le site ne s'affiche pas
1. Vérifiez que WAMP est démarré (icône verte)
2. Vérifiez l'URL : `http://localhost/test/site1/index.php`
3. Vérifiez que les fichiers sont bien dans `c:\wamp64\www\test\site1\`

### Le formulaire ne marche pas
1. Vérifiez que PHP fonctionne
2. Regardez la console du navigateur (F12)
3. Vérifiez que `send_email.php` existe et est accessible

### Les icônes ne s'affichent pas
1. Vérifiez votre connexion internet (icônes via CDN)
2. Attendez quelques secondes après le chargement de la page

## 🎉 Voilà !

Votre portfolio multi-pages est prêt ! 

**Prochaines étapes :**
1. Testez toutes les pages
2. Personnalisez le contenu
3. Ajoutez vos vrais projets
4. Testez le formulaire de contact

**Bonne chance ! 🚀**

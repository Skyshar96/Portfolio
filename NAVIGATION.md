# Guide de Navigation - Portfolio Multi-pages

## 🗺️ Plan du site

```
Site Portfolio
│
├── 🏠 Accueil (index.php)
│   ├── Section Hero (présentation)
│   └── Quick Links (navigation rapide)
│
├── 💼 Expérience (experience.php)
│   ├── Timeline des expériences
│   └── Compétences par catégories
│
├── 🚀 Projets (projects.php)
│   └── Grille de 6 projets
│
└── 📧 Contact (contact.php)
    ├── Informations de contact
    ├── Formulaire de contact
    └── Réseaux sociaux
```

## 📝 URLs du site

Avec `.htaccess` activé, vous pouvez utiliser :
- `http://localhost/test/site1/` ou `http://localhost/test/site1/index`
- `http://localhost/test/site1/experience`
- `http://localhost/test/site1/projects`
- `http://localhost/test/site1/contact`

Sans `.htaccess` :
- `http://localhost/test/site1/index.php`
- `http://localhost/test/site1/experience.php`
- `http://localhost/test/site1/projects.php`
- `http://localhost/test/site1/contact.php`

## 🔄 Flux de navigation

```
Accueil → Explore Cards → Page spécifique
   ↓
Navigation Header (accessible partout)
   ↓
Toutes les pages
```

## ✏️ Comment modifier le contenu

### 1. Changer les informations personnelles
**Fichier** : `index.php`
- Lignes 14-50 : Section Hero complète

### 2. Ajouter/Modifier une expérience
**Fichier** : `experience.php`
- Lignes 11-50 : Bloc des expériences
- Dupliquez un bloc `.experience-item` (lignes 11-27)

### 3. Modifier les compétences
**Fichier** : `experience.php`
- Lignes 60-95 : Section Skills
- Modifiez les tags dans chaque catégorie

### 4. Ajouter/Modifier un projet
**Fichier** : `projects.php`
- Lignes 11-60 : Bloc d'un projet
- Dupliquez un bloc `.project-card`

### 5. Modifier le formulaire de contact
**Fichier** : `contact.php`
- Lignes 10-30 : Informations de contact
- Lignes 35-55 : Formulaire
**Fichier** : `send_email.php`
- Ligne 7 : Changez l'email destinataire

## 🎨 Personnalisation du design

### Changer les couleurs
**Fichier** : `style.css` (lignes 8-22)
```css
:root {
    --color-accent: #22d3ee;  /* Couleur principale */
    --color-bg-primary: #0f0f0f;  /* Fond principal */
}
```

### Modifier la police
**Fichier** : `style.css` (ligne 24)
```css
body {
    font-family: 'Votre Police', sans-serif;
}
```

### Ajuster les animations
**Fichier** : `script.js` (lignes 27-42)
- Modifiez `threshold` et `rootMargin` pour changer le timing des animations

## 🛠️ Composants réutilisables

### Header (header.php)
Utilisé sur toutes les pages :
```php
<?php 
$current_page = 'home'; // Changez selon la page
$page_title = 'Titre de la page';
include 'header.php'; 
?>
```

### Footer (footer.php)
Utilisé sur toutes les pages :
```php
<?php include 'footer.php'; ?>
```

## 📤 Déploiement

### Pour mettre en ligne :
1. Téléchargez tous les fichiers .php, .css, .js
2. Configurez `send_email.php` avec votre vrai email
3. Testez le formulaire de contact
4. Remplacez toutes les images de placeholder
5. Mettez à jour tous les liens (GitHub, LinkedIn, etc.)

### Hébergement recommandé
- OVH
- O2Switch (France)
- Hostinger
- Infomaniak (Suisse)

Tous supportent PHP et permettent l'envoi d'emails.

## 🐛 Résolution de problèmes

### Le formulaire ne fonctionne pas
1. Vérifiez que PHP fonctionne : créez un fichier `test.php` avec `<?php phpinfo(); ?>`
2. Vérifiez la configuration SMTP dans `php.ini`
3. Regardez les erreurs dans la console du navigateur

### Les pages ne se chargent pas
1. Vérifiez que l'extension `.php` est bien dans l'URL
2. Vérifiez que WAMP/Apache est démarré
3. Vérifiez les permissions des fichiers

### Les icônes ne s'affichent pas
1. Vérifiez votre connexion internet (Lucide Icons via CDN)
2. Vérifiez que `<script>lucide.createIcons();</script>` est présent

## 📊 Structure des données

### Exemple d'expérience
```html
Entreprise: Askeal
Poste: Software Engineer Intern
Période: September 2025 - Now
Logo: 🔒
Description: Developing advanced AI-powered...
```

### Exemple de projet
```html
Titre: E-commerce Application
Description: Modern online commerce platform...
Image: https://images.unsplash.com/...
Technologies: [React, Next.js, Stripe, Tailwind]
Liens: GitHub + Demo
```

## 🔒 Sécurité

- ✅ Validation côté serveur dans `send_email.php`
- ✅ Sanitization des inputs
- ✅ Protection contre les injections
- ✅ Headers de sécurité

## 📈 Performance

- ✅ Images lazy loading
- ✅ Animations optimisées
- ✅ CSS et JS minimaux
- ✅ Cache des fichiers statiques (.htaccess)

---

**Besoin d'aide ?** Consultez le README.md principal pour plus de détails.

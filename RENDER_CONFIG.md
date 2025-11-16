# Configuration Render

## ⚠️ IMPORTANT : Configuration Docker

Ce projet utilise **Docker avec Apache** au lieu du serveur PHP built-in pour éviter les boucles et les erreurs 500.

## Variables d'environnement à configurer sur Render :

1. **APP_KEY** (IMPORTANT) :
```
base64:LMkIObVK9FDiAkgH7IQFHxhSRI0ZpwluBRF/O+qpyLc=
```

2. **APP_ENV** :
```
production
```

3. **APP_DEBUG** :
```
false
```

4. **APP_URL** :
```
https://portfolio-8gij.onrender.com
```

5. **ASSET_URL** :
```
https://portfolio-8gij.onrender.com
```

6. **LOG_CHANNEL** :
```
errorlog
```

6. **SESSION_DRIVER** :
```
file
```

7. **CACHE_DRIVER** :
```
file
```

## Configuration Render :

- **Environment** : Docker
- **Dockerfile Path** : `./Dockerfile`
- **Port** : 80 (Apache)

## Redéployer :

1. Assure-toi que toutes les variables d'environnement sont définies
2. Sur Render, clique sur "Manual Deploy" 
3. Sélectionne "Clear build cache & deploy"
4. Attends que le déploiement se termine (peut prendre 5-10 minutes)

## En cas d'erreur :

- Vérifie les logs dans Render Dashboard
- Assure-toi que APP_KEY est bien définie
- Le serveur utilise Apache sur le port 80

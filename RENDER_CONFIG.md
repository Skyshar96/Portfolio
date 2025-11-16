# Configuration Render

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

5. **LOG_CHANNEL** :
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

## Commandes de build et démarrage :

### Build Command :
```
composer install --no-dev --optimize-autoloader
```

### Start Command :
```
bash start.sh
```

## Redéployer :

Sur Render, cliquez sur "Manual Deploy" > "Clear build cache & deploy" pour forcer un nouveau déploiement avec la nouvelle configuration.

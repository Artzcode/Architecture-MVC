# Architecture MVC PHP

Simple architecture Model / View / Controller prêt à l'emploi.

## Configuration

Dans `app/config/config.php`, remplacer la valeur de la constante `BASE_URL` par l'URL de base de votre projet.

**Exemple :**

```php
define('BASE_URL', 'http://localhost/mon_projet/public/');
```

## Architecture dossier

```
.
+-- app/
	+-- config/
		+-- config.php
	+-- controllers/
		+-- home.php
	+-- core/
		+-- App.php
		+-- Controller.php
	+-- models/
		+-- autoload.php
	+-- views/
		+-- home/
			+-- index.php
	+-- .htaccess
	+-- init.php
+-- public/
   	+-- css/
   		+-- main.css
   	+-- js/
		+-- main.js
	+-- .htaccess
   	+-- index.php
```
# MonsterFighter
Ce projet fonctionne avec Symfony 4.
Pour l'executer vous devez posséder composer. Placez vous à la racine du dossier dans une console et tapez la commande suivante pour installer les dépendances :
```bash
composer update
```
Créer la base de données :
```bash
php bin/console doctrine:database:create
-> MonsterFighter
```

Insérer les tables dans la base de données :
```bash
php bin/console make:migration
```
```bash
php bin/console doctrine:migrations:migrate
```

Insérer les données dans les tables :
```bash
php bin/console doctrine:fixtures:load
```

Une fois cela fait il faut lancer le serveur :

```bash
php bin/console server:run
```

Rendez vous sur le navigateur à l'adresse :
```bash
http://127.0.0.1:8000
```
Assurez vous de posséder un serveur pour héberger la base de données, sur un serveur local avec MAMP ou WAMP par exemple.



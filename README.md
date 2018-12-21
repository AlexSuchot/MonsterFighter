# MonsterFighter
Ce projet fonctionne avec Symfony 4.
Pour l'éxécuter vous devez posséder composer. Dans un invite de commande placez vous à la racine du dossier :

composer update => Installer toutes les dépendances du projet
Créer la base de données :
php bin/console doctrine:database:create 
-> MonsterFighter

Insérer les tables dans la base de données :
php bin/console make:migration
php bin/console doctrine:migrations:migrate

Insérer les données dans les tables :
php bin/console doctrine:fixtures:load

Une fois cela fait il faut lancer le serveur :

php bin/console server:run

Rendez vous sur le navigateur à l'adresse :
http://127.0.0.1:8000

Assurez vous de posséder un serveur pour héberger la base de données, sur un serveur local avec MAMP ou WAMP par exemple.



FriendlyHolidays
================

A Symfony project created on June 15, 2016, 6:19 pm.

### Hackathon de la [WCS](http://www.wildcodeschool.fr) - La Loupe / Chatres / Fontainebleau ![Logo Wild Code School][logo]
du mercredi 15 juin 2016, 14h au vendredi 17 juin 2016, 14h !

#### Membres de l'équipe :

* Ninon Pelaez
* Omar Mohamed
* Yves Le Petitcorps

##### Pré-requis pour l'installation de l'application sur votre environnement de travail :

* [Symfony](https://symfony.com/)
* [Composer](http://symfony.com/doc/current/cookbook/composer.html)
* [MySQL](https://www.mysql.fr/)

Si vous ne possédez pas tous ces pré-requis, ne passez pas à l'étape suivante.

##### Installation de l'application :

1. **Clonez** le dépôt GitHub sur votre PC
HTTPS -> https://github.com/niwi84/friendlyholidays.git
SSH -> git@github.com:niwi84/friendlyholidays.git

> Nota : N'oubliez pas de cloner le dépôt au bon endroit.
```sh
--> /var/www/html pour Linux.
--> ~/Sites/ pour Mac OSX.
```

2. **Modifiez les droits** du fichier chmod.sh, via le terminal afin d'être sur que vous ayez tous les droits dessus (777).
```sh
--> sudo chmod 777 chmod.sh
```

3. **Executez** le script chmod.sh depuis le terminal
```sh
--> ./chmod.sh
```

4. **Installez** les dossiers manquants de l'application ("Vendor" et "Bin") avec Composer, en exécutant la commande :
```sh
--> composer install
```

###### L'application est prête à l'emploi.

[logo]: http://tobook.wildcodeschool.fr/assets/img/logo_wcs.png "Logo Wild Code School"


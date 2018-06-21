# PHP-Framework

## Membres : 
  - Bilel Rehahla
  - Thomas Neplaz
  - Cédric Crochet
  - Geoffroy Luchez
  
## Le Framework
  - Symfony 3.4
  
## Le sujet

Réalisation d'une plateforme de location de salle entre particulier ou société avec des forfaits pour ces salles ainsi que différent modules disponnible et pouvant être choisit par le client.
La génération en PDF des factures une fois la réservation d'une salle effectué.
Un système d'administration permettant l'accès à toute les tables afin qu'il puisse agir directement sur les données.
  
## Le projet

Il s'agit d'un projet d'une semaine, réalisé dans le cadre d'une semaine de formation sur les framework PHP. Nous avons décidé de prendre le framework Symfony dans sa version stable 3.4 afin de bénéficier d'un support de plus longue durée dans l'optique ou cette application aurait pu être livré à un client final.

Le travail à été partagé entre les membres du groupe de façon à ce que le projet avance le mieux possible. Cédric étant la personne qui avait le plus de connaissance sur le sujet, fut celui qui s'occupa des fonctionnalité les plus complexes. 

## Les problèmes

Durant le développement nous avons rencontré quelques problèmes qui ont fait que la totalité du projet ne pourra pas être livré à la fin du rush. En effet, nous avons eut pas mal de problème de versionning avec git.
Nous avons également subit quelques problèmes matériels, soit une machine qui à du être complètement rebooter et réinstallé, ce qui à bloqué un membre pendant quelques heures.

## Nos décisions

Il nous a donc été nécessaire de décider de ne pas tout produire afin de pouvoir tout de même fournir un projet qui soit fonctionnel. Ainsi, le développement de l'export des factures à été laissé de côté afin que nous puissions nous concentrer sur la fonctionnalité principale de réservation d'une salle.
Nous avions aussi ajouté des tables de correspondance pour lier certaines tables entre elles. Ils ne sont plus utile car doctrine se charge de cela pour nous.

## Assignation des tâches

https://trello.com/b/eOe9PrY2/php-framework

## Requis

### php 7.1
`apt-get purge 'php7*'
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt install --no-install-recommends php7.1 libapache2-mod-php7.1 php7.1-mysql php7.1-curl php7.1-json php7.1-gd php7.1-mcrypt php7.1-msgpack php7.1-memcached php7.1-intl php7.1-sqlite3 php7.1-gmp php7.1-geoip php7.1-mbstring php7.1-redis php7.1-xml php7.1-zip
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update`

### apache2

`sudo apt-get install apache2`





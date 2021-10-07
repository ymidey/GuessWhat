# Guess What

Prise en main de la POO avec PHP

Niveau : Deuxième année de BTS SIO SLAM

Prérequis : bases de la programmation, PHP 7 ou supérieur installé sur votre machine de dev.

# liens depots 

lien depot initial (guessWhat) : https://gitlab.com/okpu/guesswhat

lien depot de mon depot : https://github.com/ymidey/GuessWhat

# Matériels utilisé

OS : Windows 10  
IDE : PHPStorm  
PHP version 8.0.10  
Composer version 2.1.6  

## Thème 

Développer une logique de jeu en PHP en mettant en oeuvre de la conception objet et des tests unitaires.

Jeu en mode console. Un début d'implémentation est proposé (`play-console.php` à lancer dans une console)

:information_source: Ce projet est un bon candidat à une application web avec symfony, éligible comme activité professionnelle si prise en compte des scores des joueurs dans une base de données.

Les étapes d'un scénario typique d'usage sont 

1. (optionnel pour le joueur) paramétrage du jeu (par exemple choix du jeu de cartes, activation de l'aide à la recherche, ...)
2. Lancement d'une partie (le jeu instancie un jeu de carte et tire une carte "au hasard"), que le joueur doit deviner en un *temps optimal*
3. Le joueur propose une carte
4. Si ce n'est pas la bonne carte, alors si l'aide est activée, le joeur est informé si la carte qu'il a soumise est plus petite ou plus grande que celle à deviner. Retour en 3.
5. (c'est la bonne carte alors) La partie se termine et le jeu affiche des éléments d'analyse (nombre de fois où le joueur a soumis une carte, sa *qualité stratégique*, ...)
6. Fin de la partie.

## Objectif

* Conception et mise au point de la logique applicative avec PHPUnit
* Structure de données, recherche d'un élément dans une liste
* Analyse des actions du joueur (fonction du nombre de cartes, aides à la décision)

## Challenge-1 : Prise en main 

PHP cli opérationnel (php -version) :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356807-6f730844-1764-4b6c-923a-566b3559643f.PNG)

composer opérationel (composer -V) :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356790-cf8e0473-dda4-4b35-92e1-027ef5cd611d.PNG)

./bin/phpunit --version :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356812-70a9b55a-41d6-41e5-b11f-e9f23ea8230d.PNG)

./bin/phpunit (fait à partir du fichier CardTest.php) :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356811-3228bb14-a1bb-43b6-ad48-1772cc868dc6.PNG)

## Challenge-2 : Implémentation des TODOs de CardTest

Modification de la fonction 'compare' situé dans la classe 'CardGame32' du fichier CardGame32.php afin de faire fonctionner les differents tests :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356796-d7b72f54-d14b-4385-be73-12fcb497395f.PNG)

_Test 1 (testCompareSameNameNoSameColor) :_
![Screenshot](https://user-images.githubusercontent.com/77786954/136356768-d27e96fb-74b1-4558-9e59-4524eb3819d2.PNG)

Résultat du test 1 :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356817-938ea8a8-a2cf-4a60-8c1d-11cc008d4c66.PNG)

_Test 2 (testCompareNoSameCardNoSameColor) :_
![Screenshot](https://user-images.githubusercontent.com/77786954/136356765-5dc2ae4a-2f42-42b4-839a-1be82bc93104.PNG)

Résultat du test 2 :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356819-f7a297d6-c33e-4a51-88b7-8009d3392f0c.PNG)

Test (testCompareNoSameCardSameColor) :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356767-0b7ad886-9aa1-490c-8302-527da7638d2e.PNG)

Résultat du test (testCompareNoSameCardSameColor) :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356821-5dbd3a2b-02b5-4ca4-8fdd-a8446c190646.PNG)

**Fonction __ToString** 

Ajout de la fonction '__toString' situé dans la class 'Card' du fichier Card.php :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356802-fed67807-5095-4084-bb76-fb93465abbdd.PNG)

Test 4 (testToString) :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356773-d0e1cbf4-07ea-4715-9156-c73cd3aab2d7.PNG)

Résultat du test (testToString) :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356825-e4c520f5-1c3f-4375-983b-1f9d4ca177fa.PNG)

## Challenge-3 : Conception de tests unitaires pour CardGame32

Travail à faire :

Ajouter une nouvelle classe de test en respectant la logique de nommage utilisée dans ce projet :

Création du fichier de test pour CardGame32 :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356787-d5ecfa90-cf49-4c7f-86ee-0118db464537.PNG)

![Screenshot](https://user-images.githubusercontent.com/77786954/136356791-82c1eeb4-db48-4871-a212-2c2d1759d6f2.PNG)

Création du jeu de 32 cartes avec la fonction 'factoryCardGame32' dans le fichier CardGame32.php afin de l'utiliser pour nos différents tests
![Screenshot](https://user-images.githubusercontent.com/77786954/136356793-90b63525-a4b5-464e-9417-58c768e37652.PNG)

Création de la fonction 'testToString1Card' dans le fichier CardGame32Test.php afin de vérifier avec un test unitaire si le code renvoi belle et bien 1 carte :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356775-4ca5ec01-48c7-4623-a17d-154d43a4714d.PNG)

Résultat du test :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356785-55395f79-1c6b-4088-b1c2-5a1321aca1ff.PNG)

Création de la fonction 'shuffle' dans la class 'CardGame32' situe dans le fichier CardGame32.php.
Elle a pour but de mélanger un tableau

![Screenshot](https://user-images.githubusercontent.com/77786954/136356835-90adc854-0d31-4ed9-ac15-1527a46a02e5.PNG)

Création de la fonction 'testShuffle' dans le fichier CardGame32Test.php afin de vérifié si notre fonction shuffle situé dans CardGame32 renvoi bien un tableau mélangé

![Screenshot](https://user-images.githubusercontent.com/77786954/136356771-c730d3ab-7b1f-44a8-9369-2d2509ee24c3.PNG)

Résultat du test :
![Screenshot](https://user-images.githubusercontent.com/77786954/136356815-6189dcaa-e80b-42d6-9bdc-a55e97f10fc4.PNG)

Création de la fonction 'uSort' dans la class 'CardGame32' situe dans le fichier CardGame32.php.
Elle a pour but de remettre en ordre un tableau en utilisant la fonction 'usort' et en donnant comme paramètre la fonction 'compare'
![Screenshot](https://user-images.githubusercontent.com/77786954/136356782-d11d99e7-b3be-4b43-8fff-0edfbb15a650.PNG)

Création de la fonction 'testUSort' dans le fichier CardGame32Test.php afin de vérifié si notre fonction 'uSort' situé dans CardGame32 renvoi bien un tableau remit en ordre 
Afin de tester cette fonction, j'ai mis en place 2 jeu ($CardGame ; $CardGame2), puis j'en ai melangé un, $CardGame2 dans notre cas et enfin j'ai utilisé notre fonction 'uSort'.
Suite à ceci avec phpunit, j'ai fait un test 'assertsEquals' des deux tableaux afin de voir si les deux tableaux après ces différents changement sont toujours les memes.

![Screenshot](https://user-images.githubusercontent.com/77786954/136356779-9d1987ff-5e4c-4651-9694-41376d4e019b.PNG)

Résultat du test :

![Screenshot](https://user-images.githubusercontent.com/77786954/136356816-d5c688b9-6585-4cef-8828-c276b7707fa7.PNG)

Création de la fonction 'getCard' dans le fichier CardGame32Test.php.
Elle a pour but de tirer une carte aléatoirement dans notre jeu de carte crée avec la fonction 'factoryCardGame32'
![Screenshot](https://user-images.githubusercontent.com/77786954/136356800-39c8bb58-f62f-4f6f-8029-a877c5c11ad3.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testGetCard' dans le fichier CardGame32Test.php afin de tester si cette fonction renvoi bien une carte

# Challenge-4 : Conception de tests unitaires pour Guess

Ajout du paramètre 'si $cardGame est null, affecter alors un jeu de 32 par défaut' dans la fonction '__construct' de la class 'guess' du fichier guess.php.
![Screenshot](https://user-images.githubusercontent.com/77786954/136356762-1da7aceb-81bf-42a4-bc50-cce8142a2670.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testNull32' dans le fichier CardGame32Test.php afin de tester si cette fonction créer bien un jeu de 32 cartes si la fonction $cardGame est null.

Ajout du paramètre 'tirer aléatoirement une carte' si aucune carte(valeur) a été initié dans la variable $selectedCard
![Screenshot](https://user-images.githubusercontent.com/77786954/136356828-cc4f9f23-72c7-473a-b6d3-5861ddb62449.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testSortRandomCard' dans le fichier GuessTest.php afin de tester si cette fonction choisi bien une carte aléatoire dans notre jeu.

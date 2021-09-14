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

![](D:\Sio22\Projet_git\Projet_carte\doc\php-cli.PNG)

composer opérationel (composer -V) :

![](D:\Sio22\Projet_git\Projet_carte\doc\Composer-V.PNG)

./bin/phpunit --version :

![](D:\Sio22\Projet_git\Projet_carte\doc\Php--version.PNG)

./bin/phpunit (fait à partir du fichier CardTest.php) :

![](D:\Sio22\Projet_git\Projet_carte\doc\PhpUnit-CardTest.PNG)

## Challenge-2 : Implémentation des TODOs de CardTest

Modification de la fonction 'compare' situé dans la classe 'CardGame32' du fichier CardGame32.php afin de faire fonctionner les differents tests :
![](D:\Sio22\Projet_git\Projet_carte\doc\FonctionCompare.PNG)

_Test 1 (testCompareSameNameNoSameColor) :_
![](D:\Sio22\Projet_git\Projet_carte\doc\testSameCardNoSameColor.PNG)

Résultat du test 1 :
![](D:\Sio22\Projet_git\Projet_carte\doc\Resultat1.PNG)

_Test 2 (testCompareNoSameCardNoSameColor) :_
![](D:\Sio22\Projet_git\Projet_carte\doc\Test2.PNG)

Résultat du test 2 :
![](D:\Sio22\Projet_git\Projet_carte\doc\Resultat2.PNG)

Test (testCompareNoSameCardSameColor) :

![](D:\Sio22\Projet_git\Projet_carte\doc\Test3.PNG)

Résultat du test (testCompareNoSameCardSameColor) :
![](D:\Sio22\Projet_git\Projet_carte\doc\Resultat3.PNG)

**Fonction __ToString** 

Ajout de la fonction '__toString' situé dans la class 'Card' du fichier Card.php :
![](D:\Sio22\Projet_git\Projet_carte\doc\FonctionTestToString.PNG)

Test 4 (testToString) :
![](D:\Sio22\Projet_git\Projet_carte\doc\ResultatTestToString.PNG)

Résultat du test (testToString) :
![](D:\Sio22\Projet_git\Projet_carte\doc\Resultat4.PNG)

## Challenge-3 : Conception de tests unitaires pour CardGame32

Travail à faire :

Ajouter une nouvelle classe de test en respectant la logique de nommage utilisée dans ce projet :

Création du fichier de test pour CardGame32 :

![](D:\Sio22\Projet_git\Projet_carte\doc\CardGame32.PNG)
![](D:\Sio22\Projet_git\Projet_carte\doc\CreationCardGame32.PNG)

Création du jeu de 32 cartes avec la fonction 'factoryCardGame32' dans le fichier CardGame32.php afin de l'utiliser pour nos différents tests
![](D:\Sio22\Projet_git\Projet_carte\doc\factory.PNG)

Concevoir des méthodes de test qui testent le bon comportement des objets (méthodes d’instance) de cette classe ainsi que ses méthodes statiques (méthodes de classe) :

Création de la fonction '__ToString' dans la class 'CardGame32' situe dans le fichier CardGame32.php.
Elle a pour fonction de nombre de valeur dans un tableau
![](D:\Sio22\Projet_git\Projet_carte\doc\fonction__tostring.PNG)

Création de la fonction 'testToString1Card' dans le fichier CardGame32Test.php afin de vérifier avec un test unitaire si le code renvoi belle et bien 1 carte :
![](D:\Sio22\Projet_git\Projet_carte\doc\TestToStringNombreCarte.PNG)

Résultat du test :
![](D:\Sio22\Projet_git\Projet_carte\doc\1Carte.PNG)

Création de la fonction 'shuffle' dans la class 'CardGame32' situe dans le fichier CardGame32.php.
Elle a pour but de mélanger un tableau

![](D:\Sio22\Projet_git\Projet_carte\doc\Shuffle.PNG)

Création de la fonction 'testShuffle' dans le fichier CardGame32Test.php afin de vérifié si notre fonction shuffle situé dans CardGame32 renvoi bien un tableau mélangé
![](D:\Sio22\Projet_git\Projet_carte\doc\TestShuffle.PNG)

Résultat du test :
![](D:\Sio22\Projet_git\Projet_carte\doc\ResShuffle.PNG)

Création de la fonction 'uSort' dans la class 'CardGame32' situe dans le fichier CardGame32.php.
Elle a pour but de remettre en ordre un tableau en utilisant la fonction 'usort' et en donnant comme paramètre la fonction 'compare'
![](D:\Sio22\Projet_git\Projet_carte\doc\uSort.PNG)

Création de la fonction 'testUSort' dans le fichier CardGame32Test.php afin de vérifié si notre fonction 'uSort' situé dans CardGame32 renvoi bien un tableau remit en ordre 
Afin de tester cette fonction, j'ai mis en place 2 jeu ($CardGame ; $CardGame2), puis j'en ai melangé un, $CardGame2 dans notre cas et enfin j'ai utilisé notre fonction 'uSort'.
Suite à ceci avec phpunit, j'ai fait un test 'assertsEquals' des deux tableaux afin de voir si les deux tableaux après ces différents changement sont toujours les memes.

![](D:\Sio22\Projet_git\Projet_carte\doc\testuSort.PNG)

Résultat du test :

![](D:\Sio22\Projet_git\Projet_carte\doc\testuSort.PNG)

Création de la fonction 'getCard' dans le fichier CardGame32Test.php.
Elle a pour but de tirer une carte aléatoirement dans notre jeu de carte crée avec la fonction 'factoryCardGame32'
![](D:\Sio22\Projet_git\Projet_carte\doc\fonctionGetCard.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testGetCard' dans le fichier CardGame32Test.php afin de tester si cette fonction renvoi bien une carte

# Challenge-4 : Conception de tests unitaires pour Guess

Ajout du paramètre 'si $cardGame est null, affecter alors un jeu de 32 par défaut' dans la fonction '__construct' de la class 'guess' du fichier guess.php.
![](D:\Sio22\Projet_git\Projet_carte\doc\Splice.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testNull32' dans le fichier CardGame32Test.php afin de tester si cette fonction créer bien un jeu de 32 cartes si la fonction $cardGame est null.

Ajout du paramètre 'tirer aléatoirement une carte' si aucune carte(valeur) a été initié dans la variable $selectedCard
![](D:\Sio22\Projet_git\Projet_carte\doc\selcards.PNG)

Par manque de temps, je n'ai pas pu créer la fonction 'testSortRandomCard' dans le fichier GuessTest.php afin de tester si cette fonction choisi bien une carte aléatoire dans notre jeu.













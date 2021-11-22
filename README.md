# TW From Scratch

Description : 

Ce repo contient un thème Wordpress réalisé from scratch pour un exercice.

Les instructions étaient de créer un theme from sratch, créer un CPT "Recettes" afin d'ajouter des recettes de cuisines, puis d'y ajouter des Custom Fields pour permettre à l'utilisateur de rajouter des informations sur sa recette (titre, temps de cuisson, ingrédients, etc).
L'utilisateur peut également ajouter une image d'illustration via "Image mise en avant : Définir l'image mise en avant".

Le projet contient une homepage qui est l'archive de toutes les recettes, avec des cards contenant une courte description de la recette ainsi qu'un bouton pour accéder aux pages contenant les détails d'une recette.

L'utilisateur peut ajouter sa recette via l'admin dashboard de Wordpress dans "Recettes" puis "Ajouter" 
(/!\ Il faut utiliser l'éditeur de Wordpress uniquement pour donner un titre à la page, l'ajout du contenu de la recette doit se faire uniquement par les custom fields "Contenu d'une recette" qui aparaissent plus bas dans la page /!\)

![alt text](https://image.noelshack.com/fichiers/2021/46/4/1637264636-tw.png)

Instructions : 

1. Sur votre installation locale de Wordpress 5.8.1, installer le plugin "All-in-One WP Migration", cliquer sur "Importer", "Importer depuis : fichier" puis choisir le fichier "tw-from-scratch-migration.wpress"

2. Rafraichir les permaliens depuis l'interface Wordpress en se rendant dans "Réglages", "Permaliens" puis "Enregistrer les modifications"

Améliorations possibles : 

Je me suis concentré sur la partie back-end du theme from scratch en utilisant le moins de plugins possibles pour ne pas me faciliter la tâche, la partie front-end est donc très basique et à améliorer. 

La partie "Types de plats" est dans le futur censée pouvoir catégoriser les types de plats, par exemple : vegan, bio, francais, etc. 

Etant donné que c'est une installation locale, j'ai réservé la visualition du résultat uniquement en privé.

Environnement de développement :

Wordpress 5.8.1
Laragon
Windows
PhpMyAdmin
Plugins Advanced Custom Fields et All-in-one WP Migration
Functions.php contient l'essentiel du code commenté 








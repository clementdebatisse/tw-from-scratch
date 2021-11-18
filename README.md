# TW From Scratch

Description : 

Ce repo contient un th�me Wordpress r�alis� from scratch pour une candidature. 

Les instructions �taient de cr�er un theme from sratch, cr�er un CPT "Recettes" afin d'ajouter des recettes de cuisines, puis d'y ajouter des Custom Fields pour permettre � l'utilisateur de rajouter des informations sur sa recette (titre, temps de cuisson, ingr�dients, etc).
L'utilisateur peut �galement ajouter une image d'illustration via "Image mise en avant : D�finir l'image mise en avant".

Le projet contient une homepage qui est l'archive de toutes les recettes, avec des cards contenant une courte description de la recette ainsi qu'un bouton pour acc�der aux pages contenant les d�tails d'une recette.

L'utilisateur peut ajouter sa recette via l'admin dashboard de Wordpress dans "Recettes" puis "Ajouter" 
(/!\ Il faut utiliser l'�diteur de Wordpress uniquement pour donner un titre � la page, l'ajout du contenu de la recette doit se faire uniquement par les custom fields "Contenu d'une recette" qui aparaissent plus bas dans la page /!\)


 


Instructions : 

1. Sur votre installation locale de Wordpress 5.8.1, installer le plugin "All-in-One WP Migration", cliquer sur "Importer", "Importer depuis : fichier" puis choisir le fichier "tw-from-scratch-migration.wpress"

2. Rafraichir les permaliens depuis l'interface Wordpress en se rendant dans "R�glages", "Permaliens" puis "Enregistrer les modifications 

Am�liorations possibles : 

Je me suis concentr� sur la partie back-end du theme from scratch en utilisant le moins de plugins possibles pour ne pas me faciliter la t�che, la partie front-end est donc tr�s basique et � am�liorer. 

La partie "Types de plats" est dans le futur cens�e pouvoir cat�goriser les types de plats, par exemple : vegan, bio, francais, etc. 

Etant donn� que c'est une installation locale, j'ai r�serv� la visualition du r�sultat uniquement en priv�.

Environnement de d�veloppement :

Wordpress 5.8.1
Laragon
Windows
PhpMyAdmin
Plugins Advanced Custom Fields et All-in-one WP Migration
Functions.php contient l'essentiel du code comment� 








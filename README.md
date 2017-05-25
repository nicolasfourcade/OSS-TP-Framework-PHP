### Open Source School : approche MVC des framework php

Travail de tp

#### Architecture

##### Config

Dossier qui contient le systeme de routage : un tableau referencant l'accés aux principaux controllers

##### Install 

Contient le fichier sql de la creation des tables

##### Modules

Contient les repertoires mvc pour les composant constituant l'application web

##### Vendor/Root

Contient les classes genériques des modeles et des controleurs ainsi que la classe chargée de démarrer les composants de l'application.
Contient ausi le fichier de constantes pour fixer les chemins de répertoires lié au chargement de l'application

###### wwww

Contient les repertoires css et js

Les fichier .htacess pour les regles de reecriture zend de redirection apaches
et index.php pour lancer l'application

## OSS-TP-Framework-PHP

### Open Source School :  comprendre et mettre en oeuvre les frameworks php.

#### Architecture :

##### Vendor/ Root

Contient les abstractions pour le modele et le controller aisni que le lancement de l'application.

##### www

Contient les suppléments css et javascript nécessaires.

##### config

Contient le routage

##### modules

Contient la partie applicative decouper en module chacun contient le modele-vue-controller de la partie applicative.

## * 3.2 Interconnexion avec la base de données

#### * Question 1 : 
Si vous n avez mis en place aucun système pour gérer les instances de votre
classe qui vous permettra de vous connecter à la base de données, nous constatons un
problème, lequel ?

Lors de l'appel de l'obkjet on relance un connexion avec ouverture sur une table . Alors que l'utilisateur et l'adresse sont liés ces deux classe ne devrait faire l'objet que d'une seule tentative et ouverture.

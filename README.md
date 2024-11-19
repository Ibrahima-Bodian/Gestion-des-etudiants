# gestion-des-etudiants
Une petite simuation d'application web simple et fonctionnelle en sql et php pour gérer les informations des étudiants au sein d'un établissement scolaire ou universitaire.

## 📋 Description
Cette mini application de gestion des étudiants est conçue pour simplifier les tâches administratives liées à la gestion des données étudiantes. Elle permet de :

   - Ajouter, modifier et supprimer des étudiants.
   - Afficher les informations des étudiants enregistrés.
   - Fournir une interface utilisateur intuitive pour une gestion rapide.

## 🚀 Fonctionnalités
- Création d'un nouvel étudiant : Ajoutez facilement un nouvel étudiant avec ses informations (nom, prénom, âge, etc.).
- Modification : Mettez à jour les informations existantes des étudiants.
- Suppression : Supprimez les étudiants de la base de données en un clic.
- Liste des étudiants : Consultez les étudiants enregistrés sous forme de tableau.

## 📂 Structure du Projet
gestion_des_étudiants/
│
├── fichier/               # Contient les fichiers PHP et la base de données
│   ├── index.php          # Page principale avec l'affichage des étudiants.
│   ├── ajouter.php        # Page pour ajouter un étudiant.
│   ├── modifier.php       # Page pour modifier un étudiant.
│   ├── supprimer.php      # Page pour supprimer un étudiant.
│   ├── connexion.php      # Script de connexion à la base de données.
│   ├── classe.sql         # Script SQL pour créer la base de données.
│
├── style/                 # Contient les fichiers CSS
│   └── style.css          # Feuille de styles pour la mise en page.
│
├── images/                # Contient les images utilisées dans le projet
│   ├── edit.png
│   ├── modif.png
│   ├── plus.png
│   ├── retour.png
│   └── suppr.png
│
├── README.md              # Documentation du projet.


## ⚙️ Prérequis

- Serveur Web : Apache ou Nginx recommandé.
- PHP : Version 7.4 ou supérieure.
- Base de données : MySQL 5.7 ou supérieure.
- Outils :
    - Gestionnaire FTP ou FileZilla pour transférer les fichiers.
    -phpMyAdmin pour gérer la base de données.

## 🔧 Installation

1. Cloner le projet :
git clone https://github.com/votre-utilisateur/gestion-etudiants.git


2. Configurer la base de données :

    - Importez le fichier classe.sql(dans fichier) dans votre base de données MySQL.
    - Modifiez le fichier connexion.php avec vos paramètres MySQL (nom de la base, utilisateur, mot de passe).

3. Démarrer l'application :

    - Placez le projet dans le dossier racine de votre serveur web (par ex., htdocs pour XAMPP).
    - Accédez à l'application dans votre navigateur à l'adresse suivante : http://[localhost/gestion-des-etudiants/](http://localhost/Gestion_des_%c3%a9tudiants/fichiers/)

## 📜 Licence
Ce projet est sous licence MIT. Vous êtes libre de l'utiliser, de le modifier et de le distribuer.

## 📞 Contact

   - Nom : Ibrahim
   - E-mail : i.bodian879@gmail.com
   - Portfolio : Voir mes autres projets => [https://ibrhma.netlify.app/]# gestion-des-etudiants

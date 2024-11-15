<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
       //Je verif que le btn ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //J'extrait les infos envoyé dans des varbles par la methode POST
           extract($_POST);
           //Je verif que tous les champs ont été remplis
           if(isset($nom) && isset($prenom) && $age){
                //connexion à la bdd
                include_once "connexion.php";
                //requête d'ajout
                //$req = mysqli_query($con , "INSERT INTO etudiant VALUES(NULL,'$nom', '$prenom','$age')");
                $req = mysqli_query($con , "INSERT INTO etudiant (nom, prenom, age) VALUES ('$nom', '$prenom', '$age')");

                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index.php");
                }else {//si non
                    $message = "Etudiant non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/retour.png"> Retour</a>
        <h2>Ajouter un étudiant</h2>
        <p class="erreur_message">
            <?php 
            // si la varble message existe , beh on affiche son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Etudiants</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    <div class="container">
        <h1 class="main-title">GESTION DES ÉTUDIANTS</h1>
        <br><br>
        <a href="ajouter.php" class="Btn_add"> <img src="../images/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des étudiants
                $req = mysqli_query($con , "SELECT * FROM etudiant");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'étudiant dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'étudiant ajouté !" ;
                    
                }else {
                    //si non , affichons la liste de tous les étudiant
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['age']?></td>
                            <!--Nous alons mettre l'id de chaque étudiant dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="../images/modif.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="../images/suppr.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>
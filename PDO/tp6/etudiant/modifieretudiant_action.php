<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
        if(isset($_POST['code'],$_POST['nom'],$_POST['adresse'],$_POST['prenom'],$_POST['classe']))
        {
            $code=$_POST['code'];
            $nom=$_POST['nom'];
            $prenom = $_POST['prenom'];$adresse=$_POST['adresse'];
            $classe = $_POST['classe'];
            $cx=mysqli_connect("localhost","root","");
            mysqli_select_db($cx, "bib");
            $requet = "update etudiant set nom='$nom', prenom='$prenom',classe='$classe',adresse='$adresse' where codeetudiant ='$code'";
            $resultat = mysqli_query($cx,$requet);
            if($resultat)
            {
                echo "<br/>modification ok <br/>";
            }
            else
            {
                echo "<br>erreur de modification<br> ";
    
            }
        } 
    ?>
</body>

</html>
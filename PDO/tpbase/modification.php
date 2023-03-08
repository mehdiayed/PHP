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
        if(isset($_POST['code'],$_POST['nom'],$_POST['prenom'],$_POST['classe']))
        {
            $cx=mysqli_connect("localhost","root","");
            mysqli_select_db($cx, "dsi21");
            $requet = "update etudiant set nom='$nom', prenom='$prenom',classe='$classe' where Code='$code'";
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
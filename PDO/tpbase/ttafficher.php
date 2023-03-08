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
        $cx=mysqli_connect("localhost","root",""); 
        mysqli_select_db($cx, "dsi21");
        $requet = "select * from etudiant ";
        $resultat=mysqli_query($cx,$requet);
        while($l=mysqli_fetch_array($resultat))
        {
            echo "code : $l[0] -- nom : $l[1] -- prenom : $l[2] -- classe : $l[3]<br>";
        }






    ?>
</body>
</html>
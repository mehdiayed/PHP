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
    require_once("article.php");

    $idecrivain=$_GET['id'];
    $titre = $_GET['t'];
    $cathegorie = $_GET['s'];
    $txt = $_GET['txt'];
    $us = new article();
    $res = $us->modif($idecrivain,$titre,$cathegorie,$txt);
    if ($res==true){
        echo "successssssss";
    } else {
        echo "<center><h3>Problème d'insertion</h3></center> <br>";
    }
    ?>
</body>

</html>
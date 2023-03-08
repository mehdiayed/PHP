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
    $ncin = $_POST['ncin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tlf = $_POST['tlf'];

    include_once("client.php");
    $c= new client();
    $res = $c->insert($ncin, $nom, $prenom, $tlf);

    if ($res)
        echo "Insertion efectuee avec succes <br>";
    else
        echo "Problème d'insertion <br>";

    ?>
</body>

</html>
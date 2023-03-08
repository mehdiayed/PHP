<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("connexion.php"); ?>
    <?php
    $code1 = $_POST['codeetudiant'];

    $code = $_POST['code'];
    $requet = "delete from emprunter where CodeLivre = '$code' and CodeEtudiant = '$code1'";
    $ok = mysqli_query($idcon, $requet);
    if ($ok == FALSE)
        echo "Problème de suppression <br/>";
    else
        echo "Suppression effectuée avec succes <br/>";
    ?>
    <?php include("deconnexion.php"); ?>
</body>

</html>
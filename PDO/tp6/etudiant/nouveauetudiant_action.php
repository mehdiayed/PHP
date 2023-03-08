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
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $classe = $_POST['classe'];
        $requet = "insert into etudiant values($code,'$nom','$prenom','$adresse','$classe')";
        $ok = mysqli_query($idcon, $requet);
        if ($ok == FALSE)
            echo "Problème d'insertion <br/>";
        else
            echo "Insertion efectuée avec succes <br/>";
    ?>
    <?php include("deconnexion.php"); ?>
</body>

</html>
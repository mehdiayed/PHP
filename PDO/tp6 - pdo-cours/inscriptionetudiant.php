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
    require_once('useretudiant.php');
    $us = new useretudiant();
    $us-> useretudiant_code = $_POST['code'];
    $us-> useretudiant_nom = $_POST['nom'];
    $us-> useretudiant_prenom = $_POST['prenom'];
    $us-> useretudiant_adresse = $_POST['adresse'];
    $us-> useretudiant_classe = $_POST['classe'];

    $row = $us->recherche_user($us->useretudiant_code);
    $n = $row->fetchColumn();
    if ($n == 0) {
        $us->insertuser();
        header('Location:index.php');
    } else {
        echo "utilisateur existe déjà ";
    }
    ?>
</body>

</html>
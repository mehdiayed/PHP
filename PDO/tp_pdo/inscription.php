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
    require_once('user.php');
    $us = new user();
    $us->user_id = $_POST['iduser'];
    $us->user_nom = $_POST['nomuser'];
    $row = $us->recherche_user($us->user_id);
    $n = $row->fetchColumn(0);
    if ($n == 0) {
        $us->insertuser();
        header('Location:index.php');
    } else {
        echo "utilisateur existe déjà ";
    }
    ?>
</body>

</html>
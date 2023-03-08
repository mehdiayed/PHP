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
    $idcon = mysqli_connect("localhost", "root", "");
    if ($idcon) {
        echo "Connexion réussite <br/>";
        $okbd = mysqli_select_db($idcon, "bib");
        if ($okbd == TRUE)
            echo "<br/>Base correcte <br/>";
        else
            echo "<br/>Base incorrect <br/>";
    }
    else
        echo "Erreur de connexion avec le serveur:<br/>";
    ?>
</body>
</html>
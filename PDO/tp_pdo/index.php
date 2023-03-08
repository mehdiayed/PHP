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
    $res = $us->listusers();
    echo "<table border=1>
    <tr><td>Numero utilisateur</td>
    <td>Nom utilisateur</td>
    <td>Modifier</td>
    <td>Supprimer</td></tr>";
    foreach ($res as $row) {
        echo "<tr><td>$row[id]</td>
        <td>$row[nom]</td>
        <td><a href ='modif.php?id=$row[id]'>Modifier</a></td>
        <td><a href='sup.php?id=$row[id]'>Supprimer</a></td> </tr>";
    }
    echo "</table>";
    echo "<a href='inscription.html'>Inscription</a>";
    ?>
    
</body>

</html>
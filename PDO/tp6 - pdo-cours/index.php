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
    $res = $us->listusers();
    echo "<table border=1><tr><td>code etudiant </td>
                                <td>Nom </td>
                                <td>prenom </td>
                                <td>adresse </td>
                                <td>classe </td>
                                <td>Modifier</td>
                                <td>supprimer</td></tr>";
    foreach ($res as $row) {
        echo "<tr><td>$row[code]</td>
        <td>$row[nom]</td>
        <td>$row[prenom]</td>
        <td>$row[adresse]</td>
        <td>$row[classe]</td>
        <td><a href ='modifetudiant.php?code=$row[code]'>Modifier</a></td>
        <td><a href='supetudiant.php?code=$row[code]'>Supprimer</a></td> </tr>";
    }
    echo "</table>";
    echo "<a href='inscriptionetudiant.html'>Inscription</a>";
    ?>

</body>

</html>
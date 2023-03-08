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
    $res = $us->getuser($_GET['code']);
    ?>
    <form name='f1' method='post' action='modificationetudiant.php'>
        <table border='1'>
            <tr>
                <td>code etudiant</td>
                <td><input type="text" name="num" value="<?php echo $res['code'] ?>" /></td>
            </tr>
            <tr>
                <td>Nom </td>
                <td><input type="text" name="nom" value="" /></td>
            </tr>
            <tr>
                <td>prenom </td>
                <td><input type="text" name="prenom" value="" /></td>
            </tr>
            <tr>
                <td>adresse</td>
                <td><input type="text" name="adresse" value="" /></td>
            </tr>
            <tr>
                <td>classe</td>
                <td><input type="text" name="classe" value="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="modifier" name="mod" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
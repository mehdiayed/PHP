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
    $res = $us->getuser($_GET['id']);
    ?>
    <form name='f1' method='post' action='modification.php'>
        <table border='1'>
            <tr>
                <td>Numéro utilisateur</td>
                <td><input type="text" name="num" value="<?php echo $res['id'] ?>" /></td>
            </tr>
            <tr>
                <td>Nom utilisateur</td>
                <td><input type="text" name="nom" value="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="modifier" name="mod" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
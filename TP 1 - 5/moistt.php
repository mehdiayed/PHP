<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mois.php" method="POST">
            <label> mois</label>
            <input type="text" name="valeur"> <br>
            <input type="reset" name="annuler" value="annuler"> <br>
            <input type="submit" value="ok" name="valider">
    </form>
    <?php
        if(isset($_POST['civi']))
        {
            $x=$_POST['valeur'];  // valeur cest le nom de champs input au html 
            echo("la valeur saisie est : $x");
        }
    ?>
</body>
</html>
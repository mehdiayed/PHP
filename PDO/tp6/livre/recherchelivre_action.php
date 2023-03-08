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
    $champ = $_POST['champ'];
    $valeur = $_POST['valeur'];
    $requet = "select * from livre where $champ = '$valeur'";
    $res = mysqli_query($idcon, $requet);
    $nbr = mysqli_num_rows($res);
    if ($nbr == 0)
        echo "<h2>Le livre cherché n'existe pas dans la base</h2><br/>";
    else
        echo "<h2>Le livre cherché existe dans la base</h2><br/>";
    ?>
    <?php include("deconnexion.php"); ?>
</body>

</html>
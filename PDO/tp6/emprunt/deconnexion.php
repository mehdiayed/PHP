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
    $okdec = mysqli_close($idcon);
    if ($okdec)
        echo 'Déconnexion réussite <br/>';
    else
        echo 'Echec de la déconnexion <br/>';
    ?>
</body>

</html>
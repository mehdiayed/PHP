<html>

<body>
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
        $us->modifier_user($_POST['num'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['classe']);
        header('Location:index.php');
        ?>
    </body>

    </html>
</body>

</html>
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
    require_once("client.php");
    if (isset($_POST['radio'])) {
        $n = $_POST['radio'];
        $us = new client();
        $res = $us->delete($n);
    }
    header('location:listeclient.php');

    ?>
</body>

</html>
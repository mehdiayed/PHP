
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
    require_once("article.php");
    if(isset($_POST['radio']))
    {
        $n = $_POST['radio'];
        $us = new article();
        $res = $us->delete($n);
    header('location:supp.php');
    }

    ?>
</body>

</html>
<?php

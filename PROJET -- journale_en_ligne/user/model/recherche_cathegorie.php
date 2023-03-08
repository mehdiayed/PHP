<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/bootstrap.min.css">
    <script src="../view/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            margin: 2%;
        }
    </style>
</head>

<body>
    
    <table class="table table-bordered">
        <tr>
            <th> code </th>
            <th> titre </th>
            <th width="60%"> texte</th>
            <th> nom et prenom</th>
            <th> date </th>
        </tr>


        <?php
        include("article.php");
        $us = new article();
        $a = $_POST["cathegorie"];
        $res = $us->rechercher($a);
        $l = $res->fetchAll();
        echo "<center><h2>LISTE DES ARTICLES DU CATEGORIE : $a</h2></center>";
        foreach ($l as $ligne) {
        ?>
            <tr>
                <td><?php echo $ligne[0]; ?></td>
                <td><?php echo $ligne[1]; ?></td>
                <td><?php echo $ligne[2]; ?></td>
                <td><?php echo $ligne[3]; ?></td>
                <td><?php echo $ligne[4]; ?></td>
            </tr>
        <?php
        }
        ?>
        <a href="../home.html">home</a>
    </table>
</body>

</html>
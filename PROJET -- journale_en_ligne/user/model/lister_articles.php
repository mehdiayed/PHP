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

        nav {
            background-image: linear-gradient(45deg, #d65db1, #ff6f91, #ff9671);
        }
    </style>
</head>

<body>
    <nav>
        <h1>DAILY NEWS - ARTICLES </h1>
    </nav>
    <center>
        <h2 class="titre">LISTE DE TOUS LES ARTICLES</h2>
    </center>
    <table class="table table-bordered">
        <tr>
            <th> code </th>
            <th> titre </th>
            <th> categorie</th>
            <th width="60%"> texte</th>
            <th> nom et prenom</th>
            <th> date </th>
        </tr>


        <?php
        include_once("article.php");
        $us = new article();
        $res = $us->lister();
        $l = $res->fetchAll();

        foreach ($l as $ligne) {
        ?>
            <tr>
                <td><?php echo $ligne[0]; ?></td>
                <td><?php echo $ligne[1]; ?></td>
                <td><?php echo $ligne[2]; ?></td>
                <td><?php echo $ligne[3]; ?></td>
                <td><?php echo $ligne[4]; ?></td>
                <td><?php echo $ligne[5]; ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <center><a href="supp.php"> voulez vous supprimer un article ? !</a></center>
        </tr>
    </table>
</body>

</html>
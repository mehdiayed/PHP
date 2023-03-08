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
            background-image: linear-gradient(45deg, #845ec2, #d65db1,#d65db1);
        }
        .titre {
            background-image: linear-gradient(45deg, #d65db1, #ff6f91, #ff9671);
        }
    </style>
</head>

<body>
    <nav>
        <h1>DAILY NEWS - ARTICLES </h1>
    </nav>
    <form action="supprimer_article.php" method="post">
        <center>
            <h2>LISTE DES ARTICLES POUR SUPPRIMER </h2>
        </center>
        <table class="table table-bordered">
            <tr>
                <th></th>
                <th> code </th>
                <th> titre </th>
                <th> categorie</th>
                <th width="50%"> texte</th>
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
                    <td><?php echo "<input type='radio' name='radio' value='" . $ligne['idecrivain'] . "';></td>" ?>
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
        </table>
        <center><input type="submit" name="supp" value="supprimer" class="titre"><br><a href="../home.html">home</a></center>
    </form>
</body>

</html>
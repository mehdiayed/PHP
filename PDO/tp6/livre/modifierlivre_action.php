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
    if (isset($_POST['code'], $_POST['titre'], $_POST['auteur'], $_POST['date'])) {
        $code = $_POST['code'];
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $date = $_POST['date'];
        $cx = mysqli_connect("localhost", "root", "");
        mysqli_select_db($cx, "bib");
        $requet = "update livre set titre='$titre', auteur='$auteur',date='$date' where codelivre ='$code'";
        $resultat = mysqli_query($cx, $requet);
        if ($resultat) {
            echo "<br/>modification ok <br/>";
        } else {
            echo "<br>erreur de modification<br> ";
        }
    }
    ?>
</body>

</html>
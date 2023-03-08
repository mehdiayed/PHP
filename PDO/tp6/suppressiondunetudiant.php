<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="suppressiondunetudiant.php" method="POST">
        <h1>suppression d'un etudiant </h1>
        <table>
            <tr>
                <th>code </th>
                <th> <input type="text" value="" name="code"> </th>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="executer" name="ok">
                   
                </th>
                <th>
                <input type="reset" value="annuler" name="annuler">
                </th>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <?php
    if (isset($code)) {
        $code = $_POST['code'];
        $idcon = mysqli_connect("localhost", "root", "");
        mysqli_select_db($idcon, "bib");
        $requet = "delete from etudiant where codeetudiant = $code";
        $ok = mysqli_query($idcon, $requet);
        if ($ok == FALSE)
            echo "Problème de suppression <br/>";
        else
            echo "Suppression effectuée avec succes <br/>";
    }

    ?>
   
</body>

</html>
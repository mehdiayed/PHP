<html>

<head>
    <link type="text/css" href >
</head>

<body>
    <form action='fichier.php' method='post'>
        <table border='1'>
            <tr>
                <td>Classe</td>
                <td><input type="text" name="classe">
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name='nom'>
            </tr>
            <tr>
                <td>Pr&eacutenom</td>
                <td><input type="text" name='prenom'>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST)) {
    $fichier = fopen("exemp.txt", "a+");
    $cl = $_POST['classe'];
    $n = $_POST['nom'];
    $p = $_POST['prenom'];

    $ch = $n . "#" . $p . "#" . $cl . "\n";
    $ok = fwrite($fichier, $ch);

    fclose($fichier);
}

?>
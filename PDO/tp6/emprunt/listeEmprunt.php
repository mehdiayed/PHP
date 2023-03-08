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
    $idcon = mysqli_connect("localhost", "root", "");
    $okbd = mysqli_select_db($idcon, "bib");
    $requet = "select * from emprunter";
    $res = mysqli_query($idcon, $requet);
    ?>
    <table border="2">
        <tr>
            <th> Date</th>
            <th> Code Etudiant</th>
            <th> Code Livre</th>

        </tr>
        <?php
        while ($ligne = mysqli_fetch_array($res)) {
        ?>
            <tr>
                <td><?php echo $ligne[0]; ?></td>
                <td><?php echo $ligne[1]; ?></td>
                <td><?php echo $ligne[2]; ?></td>

            </tr>
        <?php
        }
        mysqli_close($idcon);
        ?>
    </table>
</body>

</html>
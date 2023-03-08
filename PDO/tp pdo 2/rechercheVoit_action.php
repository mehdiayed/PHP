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
    $carburant = $_POST['carburant'];
    $idcon = mysqli_connect("localhost", "root", "");
    $okbd = mysqli_select_db($idcon, "AGENCE");
    $requet = "SELECT * from voiture where carburant = '$carburant'";
    $res = mysqli_query($idcon, $requet);
    while ($ligne = mysqli_fetch_array($res)) {
    ?>
        <fieldset>
            <table>
                <tr>
                    <th>
                        <h1>Liste des voiture : <?php echo "$carburant" ?></h1>
                    </th>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th>Numéro de serie</th>
                    <th>Marque</th>
                    <th>Prix de location</th>
                </tr>
                <tr>
                    <td><?php echo $ligne[1]; ?></td>
                    <td><?php echo $ligne[2]; ?></td>
                    <td><?php echo $ligne[3]; ?></td>
                </tr>
            <?php
        }
            while ($ligne = mysqli_fetch_array($res)) {
            ?>
                <tr>
                    <td><?php echo $ligne[1]; ?></td>
                    <td><?php echo $ligne[2]; ?></td>
                    <td><?php echo $ligne[3]; ?></td>
                </tr><br>
            </table>
        </fieldset>
    <?php
            mysqli_close($idcon);
        }
    ?>
</body>

</html>
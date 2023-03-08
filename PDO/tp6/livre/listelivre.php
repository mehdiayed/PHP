<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{color: blue; font-style: italic;}
    </style>
</head>



<body>
    <h1>Liste Des Livres </h1>
    <?php
    $idcon = mysqli_connect("localhost", "root", "");
    $okbd = mysqli_select_db($idcon, "bib");
    $requet = "select * from livre";
    $res = mysqli_query($idcon, $requet);
    ?>
    <table border="2">
        <tr>
            <th> Code</th>
            <th> titre</th>
            <th> auteur</th>
            <th> date edition </th>
        
        </tr>
        <?php
        while ($ligne = mysqli_fetch_array($res)) {
        ?>
            <tr>
                <th><?php echo $ligne[0]; ?></th>
                <th><?php echo $ligne[1]; ?></th>
                <th><?php echo $ligne[2]; ?></th>
                <th><?php echo $ligne[3]; ?></th>
            </tr>
        <?php
        }
        mysqli_close($idcon);
        ?>
    </table>
</body>


</html>
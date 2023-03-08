<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="supp.php" method="post">
        <center>
            <table border="1">
                <tr>
                    <th></th>
                    <th> identifiant</th>
                    <th> numero cin </th>
                    <th> nom</th>
                    <th> prenom</th>
                    <th> telephone</th>
                </tr>
                <?php
                    require_once("client.php");
                    $c = new Client();
                    $res = $c->liste();
                    foreach ($res as $row){
                ?>
                    <tr>
                        <td><?php echo"<input type='radio' name='radio' value='".$row['idclient']."';></td>"?>
                        <td><?php echo  $row[0]; ?></td>
                        <td><?php echo  $row[1]; ?></td>
                        <td><?php echo  $row[2]; ?></td>
                        <td><?php echo  $row[3]; ?></td>
                        <td><?php echo  $row[4]; ?></td>
                    </tr>
                <?php
                }
                ?>
                
            </table>
            
            <center><input type="submit" name="supp" value="supprimer"></center>
        </center><br>
    </form>
</body>

</html>
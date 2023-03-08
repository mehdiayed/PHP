<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajouterLoc_action.php" method="POST">
        <fieldset>
            <legend>Nouvelle Location :</legend>
            <table>
                <tr>
                    <td>client : </td>
                    <td>
                        <select name="s1">
                            <?php
                                include_once ("client.php");
                                $cl=new client ();
                                echo "<option>- selectionnez un client -</option>";
                                $tab=$cl->liste();
                                foreach ($tab as $row){
                                    echo "<option value=".$row['idclient'].">".$row['prenom']." ".$row['nom']."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <!---->
                <tr>
                    <td>Voiture : </td>
                    <td>
                        <select name="s2">
                            <?php
                                include_once ("voiture.php");
                                $v=new voiture ();
                                echo "<option>- selectionnez une voiture -</option>";
                                $tab=$v->liste();
                                foreach ($tab as $row){
                                    echo "<option value=".$row['idvoiture'].">".$row['marque']." ".$row['numserie']."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Date : </td>
                    <td><input type="date" name="a"</td>
                </tr>
                <tr>
                    <td> Nombre de jour : </td>
                    <td><input type="number" name="b"</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Valider"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
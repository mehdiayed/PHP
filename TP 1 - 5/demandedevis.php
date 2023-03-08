<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="rapport.php">
    <?php
        $deb = array ("512" => 10.000 , "1Mbps" => 15.000 , "2Mbps" => 20.000 );
    ?>
        <table>
            <tr>
                <th>
                    nom et prenom :
                </th>
                <th>
                    <input type="text" name="nom" value="">
                </th>
            </tr>
            <tr>
                <th>
                    adresse :
                </th>
                <th>
                    <input type="text" name="adr" value="">
                </th>
            </tr>
            <tr>
                <th>
                    Debit :
                </th>
                <th>
                    <select name="list" >
                    <option value="choisir un debit">choisir un debit</option>
                        <?php 
                            foreach($deb as $i => $val)
                            echo "<option value=".$val.">".$i."</option>" ;
                        ?>
                        
                    </select>
                </th>
            </tr>
        </table>
        <input type="radio" name="cc" value="1">1mois
        <input type="radio" name="cc" value="3">1 trimestre (3 mois)
        <input type="radio" name="cc" value="12">1 an (12 mois)
        <br><br>
        <input type="submit" value ="demande devis">
        <input type="reset" name="" id="" value="annuler">
    </form>
    
</body>
</html>
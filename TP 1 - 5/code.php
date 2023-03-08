<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <form action="code.php"  method="POST">
            <table>

                <tr>
                    <th>code :</th>
                    <th><input type="text" name="code" value=""></th>
                </tr>
                <tr>
                    <th>designation :</th>
                    <th><input type="text" name="designation" value=""></th>
                </tr>

                <tr>
                    <th> prix :</th>
                    <th><input type="text" name="prix" value=""></th>
                </tr>

                <tr>
                    <th>
                        <input type="submit" value="OK" name="valider">

                    </th>
                    <th>
                        <input type="reset" value="annuler" name="annule">
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
   

        if (isset($_POST['code'])) {
            $fichier = fopen("code.txt", "a");
            $code = $_POST['code'];
            fwrite($fichier, $code ."+");
            fclose($fichier);
        
        }

        if (isset($_POST['designation'])) {
            $fichier = fopen("code.txt", "a");
            $designation = $_POST['designation'];
            fwrite($fichier, $designation ."+");
            fclose($fichier);
            
        }

        if (isset($_POST['prix'])) {
            $fichier = fopen("code.txt", "a");
            $prix = $_POST['prix'];
            fwrite($fichier, $prix ."\n");
            fclose($fichier);
            
        }
   
    ?>
</body>

</html>
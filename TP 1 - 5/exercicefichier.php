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
    <form action="exercicefichier.php" method="POST">
        <table>
            
            <tr>
                <th>nom :</th>
                <th><input type="text" name="nom" value="" ></th>
            </tr>
            <tr>
                <th>prenom :</th>
                <th><input type="text" name="prenom" value=""></th>
            </tr>
            
            <tr>
                <th>classe :</th>
                <th><input type="text" name="class" value=""></th>
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
    
    if(isset($_POST['nom']))
    {
        $fichier = fopen("exemple.txt", "a");
        $nom=$_POST['nom']; 
        fwrite($fichier,$nom);
        fclose($fichier);
    }

    if(isset($_POST['prenom']))
    {
        $fichier = fopen("exemple.txt", "a");
        $prenom=$_POST['prenom']; 
        fwrite($fichier,$prenom);
        fclose($fichier);
    }

    if(isset($_POST['class']))
    {
        $fichier = fopen("exemple.txt", "a");
        $class=$_POST['class']; 
        fwrite($fichier,$class);
        fclose($fichier);
    }
    
    

?>
</body>
</html>

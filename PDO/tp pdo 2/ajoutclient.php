<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ajoutclient_action.php" method="post">
        <h1>Nouveau client </h1>
        <p> Veuillez remplir les champs suivants:</p>
        NUMERO DE CIN  : <input type="number" name="ncin"><br><br>
        NOM : <input type="text" name="nom"><br><br>
        PRENOM : <input type="text" name="prenom"><br><br>
        TELEPHONE: <input type="text" name="tlf"><br><br>
        <input type="submit" value="ajouter">
        <input type="reset" value="annuler">
    </form>
</body>

</html>
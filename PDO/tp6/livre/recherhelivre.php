<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Rechercher Un livre </h2> 

        <p>Vouillez selectionner un critere de recherche :</p>

            <form action="recherchelivre_action.php" method="POST">
                critere : 
                <select name="champ">
                    <option value="codelivre">codelivre</option>
                    <option value="titre">titre</option>
                    <option value="auteur">auteur</option>
                    <option value="dateedition">dateedition</option>
                </select><br><br>
                valeur : <input type="text" value="" name="valeur"><br><br>
                <input type="reset" value="annuler" name="b1">
                <input type="submit" value="rechercher" name="b2"> 

            </form>

</body>
</html>
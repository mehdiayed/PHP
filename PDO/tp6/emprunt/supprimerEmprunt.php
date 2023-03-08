<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <fieldset>
        <legend> Supprimer Emprunt </legend>
        Veuillez remplir les champs suivants :
        <form action="supprimerEmprunt_action.php" method="post">
            <table>

                <tr>
                    <td><label for="num">codeEtudiant :</label></td>
                    <td><input type="text" name="code1"></td>
                </tr>
                <tr>
                    <td><label for="num">codeLivre :</label></td>
                    <td><input type="text" name="code2"></td>
                </tr>
            </table>
            <br>
            <input type="submit" name="annuler" value="Executer">
            <input type="reset" name="submit" value="Annuler">

        </form>
    </fieldset>
</body>

</html>
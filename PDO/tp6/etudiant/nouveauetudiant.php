<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='nouveauetudiant_action.php' method='post'>
    <h1>nouveau etudiant </h1>

        <table border='1'>
            <tr>
                <td>Code etudiant :</td>
                <td><input type="text" name="code">
            </tr>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name='nom'>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><input type="text" name='prenom'>
            </tr>
            <tr>
                <td>adresse</td>
                <td><input type="text" name='adresse'>
            </tr>
            <tr>
                <td>classe</td>
                <td><input type="text" name='classe'>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="executer" name="ok">
                   
                </th>
                <th>
                <input type="reset" value="annuler" name="annuler">
                </th>
            </tr>           
        </table>
    </form>
</body>
</html>
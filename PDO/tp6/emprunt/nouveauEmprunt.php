<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action='nouveauEmprunt_action.php' method='post'>
        <h1>emprunter un livre </h1>

        <table border='1'>
            <tr>
                <td>date d'emprunte :</td>
                <td><input type="date" name="dateemprunt">
            </tr>
            <tr>
                <td>code de l'etudiant</td>
                <td><input type="text" name="codeetudiant">
            </tr>
            <tr>
                <td>code du livre </td>
                <td><input type="text" name="code">
            </tr>
            <tr>
                <th>
                    <input type="submit" value="emprunter" name="ok">
                </th>
                <th>
                    <input type="reset" value="annuler" name="annuler">
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
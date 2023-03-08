<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='modifierlivre_action.php' method='POST'>
        <h1>nouveau etudiant </h1>

        <table border='1'>
            <tr>
                <td>Code livre :</td>
                <td><input type="text" name="code">
            </tr>
            <tr>
                <td>titre</td>
                <td><input type="text" name='titre'>
            </tr>
            <tr>
                <td>auteur</td>
                <td><input type="text" name='auteur'>
            </tr>
            <tr>
                <td>date edition</td>
                <td><input type="text" name='date'>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="modifier" name="ok">

                </th>
                <th>
                    <input type="reset" value="annuler" name="annuler">
                </th>
            </tr>
        </table>
    </form>
</body>

</html>
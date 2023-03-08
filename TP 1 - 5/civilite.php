<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <form action="civilite.php" method="POST">
        <table border="1">
            <tr>
                <th>civilite :</th>
                <th>
                    <input type="radio" name="civi" value="Monsieur">Monsieur
                    <input type="radio" name="civi" value="Mademoiselle">Mademoiselle
                </th>
            </tr>
            <tr>
                <th>nom :</th>
                <th><input type="text" name="nom" value="" ></th>
            </tr>
            <tr>
                <th>prenom :</th>
                <th><input type="text" name="prenom" value=""></th>
            </tr>
            <tr>
                <th>parcours :</th>
                <th>
                    <input type="checkbox" name="par[]" value="dsi" id="cc">DSI
                    <input type="checkbox" name="par[]" value="rsi" id="cc">RSI
                    <input type="checkbox" name="par[]" value="mdw" id="cc">MDW
                    <input type="checkbox" name="par[]" value="sem" id="cc">SEM
                </th>
            </tr>
            <tr>
                <th>classe :</th>
                <th>
                    <select name="list">
                        <option value="TI11">TI11</option>
                        <option value="TI12">TI12</option>
                        <option value="TI13">TI13</option>
                        <option value="TI14">TI14</option>
                        <option value="TI15">TI15</option>
                    </select>
                    
                </th>
            </tr>
            <tr>
                <th>commentaire :</th>
                <th>
                    <textarea name="cmnt" cols="30" rows="10" placeholder="taper un commentaire ..."></textarea>
                </th>
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
    <?php
        echo("<br> <h3> tableau finale :</h3> <br>");
        if(isset($_POST['civi']))
        {
            $ci=$_POST['civi']; 
            echo("<table border='1'><tr><th> civilité</th><th>$ci</th></tr>");
        }

        if(isset($_POST['nom']))
        {
            $n=$_POST['nom']; 
            echo("<tr><th> nom </th><th>$n</th></tr>");
        }

        if(isset($_POST['prenom']))
        {
            $pn=$_POST['prenom']; 
            echo("<tr><th> prenom </th><th>$pn</th></tr>");
        }
        
        if(isset($_POST['par']))
        {   
            $parr=$_POST['par'];
            echo("<tr><th> parcours </th><th>");
            for($i=0;$i<count($parr);$i++)
            {
                
                echo("<br>$parr[$i]");
            }
            echo("</th></tr>");
        }

        if(isset($_POST['list']))
        {
            $li=$_POST['list']; 
            echo("<tr><th> classe </th><th>$li</th></tr>");
        }

        if(isset($_POST['cmnt']))
        {
            $c=$_POST['cmnt']; 
            echo("<tr><th> commentaire </th><th>$c</th></tr></table>");
        }

    ?>
   

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="unaffichage.php" method="post">
        <h1>affichage d'un seul etudiant  </h1>
        <table>
            <tr>
                <th>code </th>
                <th> <input type="text" value="" name="code"> </th>
            </tr>
            <tr>
                <th>
                    <input type="submit" value="afficher" name="ok">

                </th>
                <th>
                    <input type="reset" value="annuler" name="annuler">
                </th>
            </tr>
        </table>
    </form>
    <?php
     if(isset($_POST['code'])){

        $code=$_POST['code'];
        $cx=mysqli_connect("localhost","root",""); 
        mysqli_select_db($cx, "dsi21"); 
        $requet = "select * from etudiant where code =$code";
        $resultat=mysqli_query($cx,$requet);
        $l=mysqli_fetch_array($resultat);
        if($l){
            
            echo "$l[0]<br>$l[1]<br>$l[2]<br>$l[3]<br>";
        }
        else{
            echo "<br>erreur d'affichage <br> ";
        }

    }



    ?>
</body>
</html>
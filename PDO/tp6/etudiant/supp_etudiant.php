<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="supp_etudiant.php" method="POST">
        <h1>suppression d'un etudiant </h1>
        <table>
            <tr>
                <th>code </th>
                <th> <input type="text" value="" name="code"> </th>
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
    <?php
        if(isset($_POST['code'])){

            $code=$_POST['code'];
            $cx=mysqli_connect("localhost","root",""); 
            mysqli_select_db($cx, "bib"); 
            $requet = "delete from etudiant where codeetudiant =$code";
            $resultat = mysqli_query($cx,$requet);
            if($resultat){
                
                echo "<br/>suppression ok <br/>";
            }
            else{
                echo "<br>erreur de suppression <br> ";
            }
    
        }
        
        
        
    ?>
</body>

</html>
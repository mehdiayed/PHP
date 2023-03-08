<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo("<br> <h3> Rapport de devis  :</h3> <br><table border='1'>");
        if(isset($_POST['nom']))
        {
            $ci=$_POST['nom']; 
            echo("<tr><th> Nom et Prenom : </th><th>$ci</th></tr>");
        }

        if(isset($_POST['adr']))
        {
            $ci=$_POST['adr']; 
            echo("<tr><th> Adresse  : </th><th>$ci</th></tr>");
        }

         if(isset($_POST['list']))
        {
            $li=$_POST['list']; 
            echo("<tr><th> Debit : </th><th>$li</th></tr>");
        }

        if(isset($_POST['cc']))
        {
            $ci=$_POST['cc']; 
            echo("<tr><th> Durée abonnement : </th><th>$ci</th></tr>");
        }
        if(isset($_POST['list']))
        {
            $prix=$_POST['list']; 
            $total = $prix * $ci;
            echo("<tr><th> Montant a payer </th><th>$total</th></tr>");
            //echo("<script> alert($total)</script>");
            echo("<input type='text' value='$total'>");
        }
        
       
    ?>
</body>
</html>
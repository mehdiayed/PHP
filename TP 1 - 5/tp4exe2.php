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
        /*include("mapage.php");
        include_once("mapage.php");*/
       /* echo"<br> -------------- 3 -------------- <br>";

        $t[0] =  rand(1,10) ; $t[1] = rand(1,10); $t[2] =  rand(1,10);
        echo" 1 /  $t[0] , $t[1] , $t[2] <br>";
        $m=0;
        while((($t[0] % 2 != 0) && ($t[1] % 2 != 1)) && ($t[2] % 2 != 1))
        {
            
            $t[0] =  rand(1,10); $t[1] = rand(1,10); $t[2] =  rand(1,10);
                
            
            $m++;
        
            echo" $m/ $t[0] , $t[1] , $t[2]<br>";
            }
            echo(" c'une suite composée d’un nombre pair suivi de deux nombres impairs");  
            echo"<br> -------------- 4 -------------- <br>"; 

            $nom = "mehdi ayed";
            $adresse = "ayedmehdi31@gmail.com";
            $prenom =substr($nom,5,5);
            echo ucfirst($nom);
            echo"<br>";
            echo ucfirst($prenom);
    
            $c=strlen($nom);
            for($i=0;$i<$c;$i++)
            {
                $a=substr($nom,$i,1);
                echo "<br>$a" ;
            }

            $k=strlen($adresse);
            $com = substr($adresse,$k-3,3);
            
            if ($com == "com")
            {
                echo "<br> ladresse email est valide !";
            }*/
            /*$s=0;$m=0;
            for($i=0;$i<25;$i++)
            {
            $x[$i] = rand(0,20);
            //$l[$i]=;
            echo("sort($x[$i]) <br>");
            
           /* if($l[$i]==$x[$i])
            {
                $m++;
                
                
            }
            array_push($l,$m);
            echo(" occurence : $l[$i] <br>");*/ 
            $m=0;
            $t = array(rand(0,20));
            //$con[];
            for ($i=0;$i<24;$i++)                   /// array_count_values($t) 
            {
                $con++;
                array_push($t,rand(0,20));
                echo("$t[$i]<br>");
                if($t[$i]==$t[$i+1])
                {
                    $m++;    
                }
                for($b=0;$b < 25 ;$b++)
                {
                    array_push($occ,$m);
                    echo("$occ[$m]<br>");
                }
            }
            
            
      
              
        ?>
</body>
</html>
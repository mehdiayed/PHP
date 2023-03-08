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
        include "testinclude.php"; // ou require ()
        echo ("<br>$a");
        // include_one()  ou require_once();
    ?>
<!-- VAR INITIALISIE OU NON   -->
    <?php

        if(isset($b))
        {
            echo("la variable est definie et initialise");
            echo("<br>");
        }
        else
        {
            echo("variable non definie ");
            echo("<br>");
        }
    ?>
<!-- MAX VAR  -->
    <?php
        $a=10;
        $b=20;
        $c=30;

        echo(max($a,$b,$c));
    ?>
<!-- MAX TAB  -->
    <?php
        echo("<br>");
        $t[0]=1; $t[1]=2; $t[2]=3; $t[3]=4; $t[4]=5;
        echo(max($t));
    ?>
<!-- ROUND  -->
    <?php
        echo("<br>");
        echo(round(3.1));
        echo("<br>");
        echo(round(3.49));
        echo("<br>");
        echo(round(3.5));
        echo("<br>");
        echo(round(3.9));
        echo("<br>");

    ?>

<!-- CEIL : partie entiere supperieur   -->
    <?php
        echo("<br>");
        echo(ceil(3.1));
        echo("<br>");
        echo(ceil(3.9));
        echo("<br>");
    ?>

<!-- FLOOR : partie entiere inferieur   -->
    <?php
        echo("<br>");
        echo(floor(3.1));
        echo("<br>");
        echo(floor(3.9));
        echo("<br>");
    ?>

<!-- RAND : valeur aleatoir    -->
    <?php
        echo("<br>");
        echo(rand(10,1));
        echo("<br>");
        echo(rand());
    ?>
<!-- DATE   -->
    <?php
        echo("<br>");
        $d=date("04/10/2020");
        echo($d);
        echo("<br>");
    ?>
<!-- chechdate : verifier une date valide   -->
    <?php
       /*
        echo("<br>");
        echo (checkdate(04,10,2020));
        echo("<br>"); 
       */

        if(checkdate(04,10,2020))  // (m/d/y)
        {
            echo("ok");
        }
        else
        {
            echo("not ok");
        }
    ?>

    <?php
        // app1 
        echo("<br>");
        $a=4000;

        $heur = ($a / 3600)  ;
        $minute = (($a % 3600) / 60)  ;
        $seconde = ($minute / 60 )  ;
        $he = floor($heur);
        $mi = floor($minute);
        $se = floor($seconde);
       // echo("$he :$mi : $se");   
        
        if((($he < 10 )&&($mi < 10 ))&&($se < 10 ))
        {
            echo("0$he:0$mi:0$se <br>"); 
        }
       
        
    ?>

    <?php
    
    $r=0;$k=0;$moy=0;$l=0;
    $i=0;$max=0;$min=1;
        // app2
        
        for($i=0;$i<10;$i++)
        {
            
            $x[$i] = rand(1,10);
            $r=$r + $x[$i] ;
            
            if ($max < $x[$i] )
            {
                $max= $x[$i];
            }
            if ($min > $x[$i] )
            {
                $min= $x[$i];
            }
            echo("$x[$i] <br>");
        }
        
        
        $moy= $r / 10 ;

        for($i=0;$i<10;$i++)
        {
            if($x[$i] > $moy)
            {
                $l=$l + 1 ;
            }
        }
        echo("<br>le maximimum est : $max <br> le minimum est : $min <br> le moyenne est  : $moy <br> le nombre d'entier supperieur au moyenne sont : $l");

    ?>-->



    </body>
</html>
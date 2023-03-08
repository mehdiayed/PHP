<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello <br>
    <?php
        echo ("<p style='color : red ;'>bonjour</p>");
    ?>

    <!-- ============================================= -->

    <?php
        $a="bonjour";
        $b=3;
        $c=2.5;
        $d=true;

        echo("la peremiere valeur est : ".$a);                         // . pour concatination
        echo('<br> la peremiere valeur est : '.$a);
        echo("<br>la peremiere valeur est : $a");                      //tifriz " " 
        echo('<br>la peremiere valeur est : $a');                      //message kima houwa  '  ' 
        echo("<br>")                    
    ?>
    
    <!-- ============================================= -->

    <?php
        $a=5;
        
        if($a % 2 == 0)
        {
            echo("cest un nombre paire");
        }
        else
        {
            echo("c'est un nombre umpaire");

        }
    ?>

    <!-- ============================================= -->
        
    <?php
        echo("<br>");

        $a=10;
        $b=20;
        $c=30;
        $max=0;
        $mid=0;
        $min=0;
        
        if(($a > $b)&&($a > $c))
        {
            $max=$a;
            if($b > $c)
            {
                $min=$c;
                $mid=$b;  
            }
            else
            {
                $min=$b;
                $mid=$c;  
            }
        }
        else if(($b > $a)&&($b > $c))
        {
            $max=$b;
            if($a > $c)
            {
                $min=$c;
                $mid=$a;  
            }
            else
            {
                $min=$a;
                $mid=$c;  
            }
        }
        else if(($c > $a)&&($c > $b))
        {
            $max=$c;
            if($a > $b)
            {
                $min=$b;
                $mid=$a;  
            }
            else
            {
                $min=$a;
                $mid=$b;  
            }
        }
        

        echo("$max > $mid > $min");
       
    ?>
    <!-- ============================================= -->

    <?php
        $a=6;
        echo("<br>");
        switch($a)
        {
            case 1 : echo("hiver");     break ;
            case 2 : echo("hiver");     break ;
            case 3 : echo("printemp");  break ;
            case 4 : echo("printemp");  break ;
            case 5 : echo("printemp");  break ;
            case 6 : echo("ete");       break ;
            case 7 : echo("ete");       break ;
            case 8 : echo("ete");       break ;
            case 9 : echo("autome");    break ;
            case 10 : echo("autome");   break ;
            case 11 : echo("autome");   break ;
            case 12 : echo("autome");   break ;
        }

    ?>

    <!-- ============================================= -->
    <?php
    echo("<br>");
        $i=1;
        $m=1;
        $s=1;
        $l=1;

        for($m==1;$m<=20;$m++)
        {
            echo("$m  ");
        }

        for($i==1;$i<=20;$i++)
        {
            echo("$i<br>");
        }
        echo("<table border='1' >");
        for($s=1;$s<=20;$s++)
        {
            echo("<tr><th>$s</th></tr>");
        }
        echo("</table >");

        echo("<table border='1' >");
        for($l==1;$l<=20;$l++)
        {
            if($l % 2 == 0)
            {
                
                echo("<tr><td bgcolor = 'red '>$l</td></tr>");
                
            }
            else
            {
                
                echo("<tr><td bgcolor = 'green'>$l</td></tr>");
                
            }    
                
        }
        echo("</table >");
    ?>
    <!-- ============================================= -->

    <?php
        /*$t['nom']="ayed";
        $t['prenom']="mehdi";
        $t['age']=20

        foreach($t as $val)
        {
            echo("$val")
        }
        foreach($t as $inf => $val)
        {
            echo("la case dindice".$ind)
        }*/
        $t = array("nom" => "ayed ","prenom" => "mehdi ", "age" => 20);
        foreach($t as $int => $val)
        {
            echo("la valeur de la case".$int."est egale a $val <br>");
        }

        print_r($t)  // fonction predifinie :  affichege d'un tab
        
    ?>

   


</body>
</html>
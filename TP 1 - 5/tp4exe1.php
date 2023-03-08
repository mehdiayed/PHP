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
    // ecercice 1 ---------------------------------------
    echo "------------ 1 ----------<br><br>";
    function factoriel($n)
    { 
        $f = 1; 
        for ($i = 1; $i <= $n; $i++)
        { 
            $f = $f * $i; 
        } 

        return $f; 
    } 
    /*$n = 3; 
    $f = fact($n); 
    echo "La factorielle de $n est $f";*/ 

    function cardinal($a,$b)
    {
        $c = factoriel($a) / factoriel($b) * factoriel($a-$b);
        return $c;
        
    }
    $a = 3 ; $b = 2 ;
    $m = cardinal($a,$b);
    echo "le cardinal de ($a , $b ) = $m <br>";

    echo "<br>------------ 2 ----------<br><br>";

    $r=0;
    $i=0;
    $max=0;
    $min=31;
    $imax=0;
    $imin=0;

    for($i=0;$i<10;$i++)
        {
            $x[$i] = rand(10,30);
            $r=$r + $x[$i] ;
            echo("$x[$i] <br>");
            if ($max < $x[$i] )
            {
                $max= $x[$i];
                $imax=$i;
            }
            if ($min > $x[$i] )
            {
                $min= $x[$i];
                $imin=$i;
            }
        }
        echo " la somme des element du tableau est  : $r <br>";
        echo "<br>------------ 3 ----------<br><br>";
        echo " la position du valeur min dans le tableau est : $imin <br>";
        echo " la position du valeur max dans le tableau est : $imax <br>";

        
        function minmax($t)
        {
            $imax=0;
            $imin=0;
            $mint=$t[1];
            $maxt=$t[1];
            for($i=0;$i<count($t);$i++)
            {   
                if ($maxt < $t[$i] )
                {
                    $max= $t[$i];
                    $imax=$i;
                }
                if ($min > $t[$i] )
                {
                    $min= $t[$i];
                    $imin=$i;
                }

            }
            $pos[0]=$imin;
            $pos[1]=$imax;
            return $pos ;
        }
        
    ?>
</body>
</html>
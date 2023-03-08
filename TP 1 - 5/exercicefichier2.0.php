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
        $fichier=fopen("exemple.txt","r");
        echo("<table border='1'>");
        while(!fgets($fichier))
        {
            $l = fgets($fichier,255);
            echo $l."<br>";
            $t = explode("#",$l);
            echo("<tr><th>".$t[0]."</tr></th>"."<tr><th>".$t[1]."</tr></th>"."<tr><th>".$t[2]."</tr></th></table>");

        }
    ?>
</body>
</html>
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
        $fichier = fopen("code.txt", "r");
        $l = fgets($fichier, 255);
        $p = explode("+",$l);
        $min=$p[2];
        while(!feof($fichier))
        {
            $l = fgets($fichier, 255);
            if($l)
            {
                $p = explode("+",$l);
                if($min>$p[2])
                {
                    $min=$p[2];
                }

            }
        }
        echo ("<script>alert(".$min.")</script>");
        ?>
</body>
</html>
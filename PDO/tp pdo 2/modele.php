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
    abstract class Modele
    {
        protected $pdo;
        const host = "localhost";
        const user = "root";
        const login = "";
        const bd = "AGENCE";
        function __construct()
        {
            $this->pdo = new PDO(
                "mysql:host=" . self::host . ";dbname=" . self::bd,
                self::user,
                self::login
            );
        }
        function __destruct()
        {
            $this->pdo = null;
        }
    } ?>
</body>

</html>
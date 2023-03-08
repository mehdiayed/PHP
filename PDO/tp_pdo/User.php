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
    class user
    {
        /* attributs de la classe utilisateur*/
        public $user_id;
        public $user_nom;
        /* Constructeur de la classe */
        function __construct()
        {
        }
        function listusers()
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT * FROM personne";
            $res = $pdo->query($req);
            return $res;
        }
        function insertuser()
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "insert into personne(id,nom) values ($this->user_id,'$this->user_nom')";
            $pdo->exec($req);
        }
        function recherche_user($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT count(*) FROM personne WHERE id=$id ";
            $res = $pdo->query($req);
            return $res;
        }
        function supprimer_user($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "DELETE FROM personne WHERE id=$id";
            $pdo->exec($req);
        }
        function getuser($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT id,nom FROM personne where id=$id";
            $res = $pdo->query($req);
            $row = $res->fetch();
            return $row;
        }
        function modifier_user($id, $nom)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            require_once('config.php');
            $req = "UPDATE personne SET nom='$nom' WHERE id=$id ";
            $pdo->exec($req);
        }
    } ?>
</body>

</html>
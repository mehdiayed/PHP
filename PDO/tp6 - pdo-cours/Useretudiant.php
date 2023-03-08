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
    class useretudiant
    {
        /* attributs de la classe utilisateur*/
        public $useretudiant_code;
        public $useretudiant_nom;
        public $useretudiant_prenom;
        public $useretudiant_adresse;
        public $useretudiant_classe;

        /* Constructeur de la classe */
        function __construct()
        {
        }
        function listusers()
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT * FROM etudiant";
            $res = $pdo->query($req);
            return $res;
        }

        function insertuser()
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "insert into etudiant(codeetudiant,nom,prenom,adresse,classe) values ($this->$useretudiant_code,'$this->$useretudiant_nom','$this->$useretudiant_prenom','$this->$useretudiant_adresse','$this->$useretudiant_classe')";
            $pdo->exec($req);
        }

        function recherche_user($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT count(*) FROM etudiant WHERE codeetudiant=$id ";
            $res = $pdo->query($req);
            return $res;
        }

        function supprimer_user($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "DELETE FROM etudiant WHERE codeetudiant=$id ";
            $pdo->exec($req);
        }

        function getuser($id)
        {
            require_once('config.php');
            $cnx = new connexion();
            $pdo = $cnx->CNXbase();
            $req = "SELECT id,nom FROM personne where codeetudiant=$id";
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
            $req = "UPDATE personne SET nom='$nom' WHERE codeetudiant=$id ";
            $pdo->exec($req);
        }
    } 
    ?>
</body>

</html>
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
    include_once("modele.php");
    class Client extends Modele
    {
        private $idClient, $ncin, $nom, $prenom, $telephone;
        function __construct($id = "", $ncin = "", $nom = "", $prenom = "", $tel = "")
        {
            $this->idClient = $id;
            $this->ncin = $ncin;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->tel = $tel;
            parent::__construct();
        }
        function insert($ncin, $nom, $prenom, $telephone)
        {
            $query = "insert into client(ncin,nom,prenom,telephone)values (?, ?, ?, ?)";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($ncin, $nom, $prenom, $telephone));
        }
        function delete($idClient)
        {
            $query = "delete from client where idClient=?";
            $res = $this->pdo->prepare($query);
            return $res->execute(array($idClient));
        }
        function liste()
        {
            $query = "select * from client";
            $res = $this->pdo->prepare($query);
            $res->execute();
            return $res;
        }
    } ?>
</body>

</html>
<?php echo
include_once ("modele.php");
class location extends modele {
    public $idlocat,$idclient,$idvoiture,$nbrjour,$dateloc;
    function __construct(){
        parent::__construct();
    }
    function insert (){
       $requet=$this->pdo->prepare ("insert into location (idclient,idvoiture,nbrjour,dateloc) values (?,?,?,?)");
       return $requet->execute(array($this->idclient,$this->idvoiture,$this->nbrjour,$this->dateloc));
    }
    function affiche (){
        $requet=$this->pdo->prepare ("select idlocat,nbrjour,dateloc,marque,numserie,ncin,nom,prenom from location, voiture , client where location.idvoiture=voiture.idvoiture and location.idclient=client.idclient");
        $requet->execute ();
        return $requet;
    }
}
?>
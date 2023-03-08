<?php 
include_once("modele.php");
class voiture extends modele{
    public $idvoiture,$numserie,$marque,$carburant,$prixlocation;
    function __construct (){
        parent::__construct();
    }
    function recherche ($carburant){
        $requet="select numserie ,  marque , prixlocation from voiture where carburant=?";
        $ok=$this->pdo->prepare ($requet);
        $ok->execute(array($carburant));
        return $ok;
    }
    function liste(){
        $query = "select * from voiture";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
         }

}



?>
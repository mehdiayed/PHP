<?php
include_once("modele.php");
class article extends Modele{
    private $idecrivain,$titre,$cathegorie,$texte,$nomprenom,$date;
    function __construct(){
        parent::__construct();
    }


    function ajouter($titre,$cathegorie,$texte,$nomprenom,$date){
        $query= "insert into article(titre,cathegorie,texte,nomprenom,date) values(?,?,?,?,?)";
		$res=$this->pdo->prepare($query);
        return $res->execute(array($titre,$cathegorie,$texte,$nomprenom,$date));
    }

    function lister(){
        $query="select * from article";
		$res=$this->pdo->prepare($query);
		$res->execute();
		return $res;
    }

    function rechercher($cathegorie){
        $query="select idecrivain,titre,texte,nomprenom,date from article where cathegorie=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($cathegorie));
        return $res;
    }
    function delete($idecrivain){
        $query = "delete from article where idecrivain=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idecrivain));
    }
    function affiche($idecrivain){
        $query="select * from article where idecrivain=?";
		$res=$this->pdo->prepare($query);
		$res->execute(array($idecrivain));
		return $res;
    }

	function modif($idecrivain,$titre,$cathegorie,$texte)
	{
		$query="update article set  titre=$titre, cathegorie=$cathegorie, texte =$texte where idecrivain=?";
		$res=$this->pdo->prepare($query);
        return $res->execute(array($idecrivain,$titre,$cathegorie,$texte)); 
	}
}
















?>
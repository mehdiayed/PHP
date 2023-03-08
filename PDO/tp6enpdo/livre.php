<?php
include_once("modele.php");
class livre extends Modele
{
	private $code, $titre, $auteur, $date;
	function __construct()
	{

		parent::__construct();
	}


	function ajouter($code, $titre, $auteur, $date)
	{
		$query = "insert into livre (codeLivre,titre,auteur,dateEdition) values(?,?,?,?)";
		$res = $this->pdo->prepare($query);
		return $res->execute(array($code, $titre, $auteur, $date));
	}
	function modifier($code, $titre, $auteur, $date)
	{
		$query = "update livre set titre='$titre', 
		auteur='$auteur',dateEdition ='$date'
		 where (codelivre='$code')";
		$res = $this->pdo->prepare($query);
		return $res->execute(array($code, $titre, $auteur, $date));
	}
	function delete($code)
	{
		$query = "delete from livre where CodeLivre = ?";
		$res = $this->pdo->prepare($query);
		return $res->execute(array($code));
	}
	function recherche($champ, $valeur)
	{
		$query = "select * from livre where ? = ?";
		$res = $this->pdo->prepare($query);
		return $res->execute(array($champ, $valeur));
	}
	function lister()
	{
		$query = "select * from livre ";
		$res = $this->pdo->prepare($query);
		$res->execute();

		return $res;
	}
}

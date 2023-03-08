<?php
include_once("modele.php");
	class etudiant extends Modele
	{
		 private $codeEtudiant,$nom,$prenom,$adresse,$classe;
		 function __construct() {
				
			parent::__construct();
	     }

	
	function ajouter($codeEtudiant,$nom,$prenom,$adresse,$classe)
	{
		$query="insert into etudiant(codeetudiant,nom,prenom,adresse,classe) values(?,?,?,?,?)";
		$res=$this->pdo->prepare($query);
		return $res->execute(array($codeEtudiant,$nom,$prenom,$adresse,$classe)); 
	}
	
	function modiffier($codeEtudiant,$nom,$prenom,$adresse,$classe)
	{
		$query="update etudiant set  nom=$nom, prenom=$prenom,adresse =$adresse,classe=$classe where codeetudiant=?";
		$res=$this->pdo->prepare($query);
		return $res->execute(array($nom,$prenom,$adresse,$classe,$codeEtudiant));
									
								
	}
	function lister()
	{
		$query="select * from etudiant";
		$res=$this->pdo->prepare($query);
		$res->execute();
		
		return $res;
		
	}
	
	function delete($codeEtudiant) {
		 $query ="delete from etudiant where Codeetudiant = ?";
		 $res=$this->pdo->prepare($query);
		return $res->execute(array($codeEtudiant));
	}
	 
	function recherche($champ,$valeur){
		$query="select * from etudiant where ? = ?";
		 $res=$this->pdo->prepare($query);
		return $res->execute(array($champ,$valeur));
	}
		 }

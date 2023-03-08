<?php
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['pnom'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];

	include_once("etudiant.php");
	$us=new etudiant();				
	$res=$us->modiffier($code,$nom,$prenom,$adresse,$classe);

	if($res)
		echo "modification effectu�e avec succes <br/>";
	 else echo"non ok";
	
?>







	<?php
	$code = $_POST['code'];
	$nom = $_POST['nom'];
	$prenom = $_POST['pnom'];
	$adresse = $_POST['adresse'];
	$classe = $_POST['classe'];

	include_once("etudiant.php");
	$us = new etudiant();

	$res = $us->ajouter($code, $nom, $prenom,$adresse, $classe);

	if ($res)
		echo "Insertion efectuee avec succes <br>";
	else
		echo "Problème d'insertion <br>";
	
	?>
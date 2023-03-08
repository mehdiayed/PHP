<?php

	$code=$_POST['code'];
	$titre=$_POST['titre'];
	$auteur=$_POST['auteur'];
	$date=$_POST['date'];
	
	include_once("livre.php");
	$us=new livre();
	$res=$us->ajouter($code,$titre,$auteur,$date);
	
	if($res)	 
	 echo "Insertion efectuee avec succes <br>";
    else
	 echo "Problème d'insertion <br>";
?>

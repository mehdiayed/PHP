
<?php

	$codeE=$_POST['codeE'];
	$codeL=$_POST['codeL'];
	$date=$_POST['date'];
	
	include_once("emprinter.php");
	$us=new emprunter();
	$res=$us->empr($codeE,$codeL,$date);
	
	 
	
	 if($res)
	echo "Insertion efectuee avec succes <br>";
	 else
	  echo "Problème d'insertion <br>";
	?>


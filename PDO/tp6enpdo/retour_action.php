<?php
$codeE=$_POST['codeE'];
$codeL=$_POST['codeL'];
$date=$_POST['date'];


include_once("emprinter.php");
		$us=new emprinter();
	$res=$us->delet($codeE,$codeL);
	
	if($res)
 echo "Problème de retourner le livre <br/>";
else
 echo "return effectuée avec succes <br/>";
?>

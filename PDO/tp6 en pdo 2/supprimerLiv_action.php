<?php
$code=$_POST['code'];

include_once("livre.php");
		$us=new livre();
	$res=$us->delete($code);
if($res)
 echo "Suppression effectuée avec succes <br/>";
else
 echo "Problème de suppression <br/>";
?>
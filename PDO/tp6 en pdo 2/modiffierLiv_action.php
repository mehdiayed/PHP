
<?php
$code=$_POST['code'];
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$date=$_POST['date'];

		
include_once("livre.php");
		$us=new livre();
	$res=$us->modifier($code,$titre,$auteur,$date);
	

if($res)
 echo "modification effectuée avec succes <br/>";
else
 echo "probleme d modification <br/>";
?>






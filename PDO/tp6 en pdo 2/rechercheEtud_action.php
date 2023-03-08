<?php
$champ=$_POST['champ'];
$valeur=$_POST['valeur'];
	include_once("etudiant.php");
	$us=new etudiant();	
	$res=$us->recherche($champ,$valeur)	;
//$nbr=mysqli_num_rows($res);
if($res==0)
 echo "<h2>L'étudiant cherché n'existe pas dans la base</h2><br/>";
else
 echo "<h2>L'étudiant cherché existe dans la base</h2><br/>";
?>

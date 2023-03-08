	<?php
	$champ=$_POST['champ'];
	$valeur=$_POST['valeur'];
	
	include_once("livre.php");
		$us=new livre();
	$res=$us->recherche($champ,$valeur);
	
	if($res==FALSE)
	 echo "<h2>Le livre cherché n'existe pas dans la base</h2><br/>";
	else
	 echo "<h2>Le livre  cherché existe dans la base</h2><br/>";
	?>
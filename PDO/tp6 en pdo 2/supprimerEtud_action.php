
<?php
$code=$_POST['code'];
include_once("etudiant.php");
$us=new etudiant();	
$res=$us->delete($code)	;
if($res==FALSE)
 echo "Problème de suppression <br/>";
else
 echo "Suppression effectuée avec succes <br/>";
?>

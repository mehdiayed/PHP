
<?php
$code=$_POST['code'];
include_once("etudiant.php");
$us=new etudiant();	
$res=$us->delete($code)	;
if($res==FALSE)
 echo "Probl�me de suppression <br/>";
else
 echo "Suppression effectu�e avec succes <br/>";
?>

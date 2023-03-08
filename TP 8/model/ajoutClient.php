<?php
include_once("client.php");
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$cl=new client();
$ok=$cl->insert($a,$b,$c,$d);
if ($ok){
    echo "insertion terminer avec succée";
}
else {
    echo "erreur d'insertion";
}
header("location:ajoutClient.html");
?>
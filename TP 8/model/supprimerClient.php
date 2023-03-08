<?php
include_once ("client.php");
$c=new client();
$c->delete($_POST['r']);
header("location:listeClient.php");
?>
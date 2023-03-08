<?php include("connexion.php"); ?>
<?php
$date = $_POST['dateemprunt'];
$CodeEtudiant = $_POST['codeetudiant'];
$CodeLivre = $_POST['code'];

$requet = "insert into emprunter values ('$date','$CodeEtudiant','$CodeLivre')";
$ok = mysqli_query($idcon, $requet);
if ($ok == FALSE)
    echo "Probleme d'insertion <br/>";
else
    echo "Insertion efectuee avec succes <br/>";
?>
<?php include("deconnexion.php"); ?>
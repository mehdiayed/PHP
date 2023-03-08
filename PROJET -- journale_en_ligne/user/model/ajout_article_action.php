<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style2.css">
	<title>Document</title>
</head>

<body>

	<?php
	require_once("article.php");
	$titre = $_POST['titre'];
	$cathegorie = $_POST['cathegorie'];
	$txt = $_POST['txt'];
	$nom = $_POST['nom'];
	$date = $_POST['date'];

	$us = new article();
	$res = $us->ajouter($titre, $cathegorie, $txt, $nom, $date);
	if ($res){
		//echo "<script>alert('insertion effectueé avec successssssss')</script>";
		header("location:../view/ajout_article.html");
	}
	else{
		echo "<center><h3>Problème d'insertion</h3></center> <br> ";
	}
	?>
	<center></center>
</body>

</html>
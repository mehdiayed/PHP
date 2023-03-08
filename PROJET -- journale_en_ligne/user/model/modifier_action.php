<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../view/css/bootstrap.min.css">
	<script src="../view/js/bootstrap.min.js"></script>
	<title>Document</title>
	<style>
		body {
			margin: 2%;
		}

		form {
			width: 60%;
		}
	</style>
</head>

<body>
	<table class="table table-bordered">
		<tr>
			<th>code</th>
			<th> titre </th>
			<th> categorie</th>
			<th width="50%"> texte</th>
			<th> nom et prenom</th>
			<th> date </th>
		</tr>
		<?php
		require_once("article.php");
		if (isset($_POST['radio'])) {
			$n = $_POST['radio'];
			$us = new article();
			$res = $us->affiche($n);
		}
		$l = $res->fetchAll();
		foreach ($l as $ligne) {
		?>
			<tr>
				<td><?php echo $ligne[0]; $k=$ligne[0] ?></td>
				<td><?php echo $ligne[1]; ?></td>
				<td><?php echo $ligne[2]; $m =$ligne[2]?></td>
				<td><?php echo $ligne[3]; $mm =$ligne[3]?></td>
				<td><?php echo $ligne[4]; $mmm =$ligne[4]?></td>
				<td><?php echo $ligne[5]; ?></td>

			</tr>
		<?php
		}
		?>
	</table>
	<hr>
	<center>
		<form action="modification.php">
			<fieldset>
				<legend>
					<center><?php echo "<center><h2> MODIFIER L'ARTICLE NUMERO : $n</h2></center>"; ?></center>
				</legend>
				<table class="table table-bordered">
					<tr>
						<th>titre</th>
						<th><input type="text" name="titre" placeholder="le titre de l'article"></th>
					</tr>
					<tr>
						<th>categorie</th>
						<th>
							<select name="cathegorie">
								<option value="-sans categorie-">-sans categorie-</option>
								<option value="film">film</option>
								<option value="education">education</option>
								<option value="loisir">loisir</option>
								<option value="historique">historique</option>
								<option value="politique">politique</option>
							</select>
						</th>
					</tr>
					<tr>
						<th> taper ici votre article </th>
						<th><input type="text" name="txt" placeholder="taper ici votre nouveau article"></textarea></th>
					</tr>
				</table>
			</fieldset>
			<center><a href="modification.php?id='<?php $k ?>'&s='<?php $m ?>'&t='<?php $mm ?>'&txt='<?php $mmm?>'">MODIFIER</a></center>
		</form>
	</center>
</body>

</html>
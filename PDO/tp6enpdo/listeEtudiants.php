<html>

<body>

	<table border="2">
		<tr>
			<th> Code</ th>
			<th> Nom</ th>
			<th> Pr�nom</th>
			<th> Adresse</th>
			<th> Classe</th>
		</tr>


		<?php
		include_once("etudiant.php");
		$us = new etudiant();
		$res = $us->lister();
		$l = $res->fetchAll();

		foreach ($l as $ligne) {
		?>
			<tr>
				<td><?php echo $ligne[0]; ?></td>
				<td><?php echo $ligne[1]; ?></td>
				<td><?php echo $ligne[2]; ?></td>
				<td><?php echo $ligne[3]; ?></td>
				<td><?php echo $ligne[4]; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>
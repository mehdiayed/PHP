<html>

<body>

	<table border="2">
		<tr>
			<th> Code</ th>
			<th> titre</ th>
			<th> auteur</th>
			<th> date</th>
		</tr>


		<?php
		include_once("livre.php");
		$us = new livre();
		$res = $us->lister();
		$l = $res->fetchAll();

		foreach ($l as $ligne) {
		?>

			<tr>
				<td><?php echo $ligne[0]; ?></td>
				<td><?php echo $ligne[1]; ?></td>
				<td><?php echo $ligne[2]; ?></td>
				<td><?php echo $ligne[3]; ?></td>

			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>
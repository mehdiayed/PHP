<html>

<body>
	<form action="rechercheLiv_action.php" method="post">
		veuillez selectionner un critere de recherche:
		<table border="0">
			<tr>
				<th> critere:</ th>
				<th><select name="champ">
						<option>codeLivre</option>
						<option>titre</option>
						<option>auteur</option>
						<option>date</option>
				</th>
			</tr>
			<tr>
				<th> valeur :</ th>
				<th><input type="text" name="valeur"></th>
			</tr>

		</table>
	</form>
</body>

</html>
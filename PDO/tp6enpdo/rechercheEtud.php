<html>
<body>
<form action="rechercheEtud_action.php" method="post">
veuillez selectionner un critere de recherche:
<table border="0">
<tr>
 <th> critere:</ th>
  <th><select name="champ">
			<option>codeEtudiant</option>
			<option>nom</option>
			<option>prenom</option>
			<option>adresse</option>
			<option>classe</option>
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
<?php 
include_once("client.php");
$c=new client();
$tab=$c->liste();
echo"<form action='supprimerClient.php' method='POST'><table border='1'>
        <tr>
            <td></td>
            <td>Identifiant</td>
            <td>Numereau cin</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Telephone</td>
        </tr>";
foreach ($tab as $row){
    echo"<tr>
    <td><input type='radio' name='r' value=".$row[0]."></td>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
    <td>".$row[3]."</td>
    <td>".$row[4]."</td>
</tr>";
}
echo "<tr>
<td></td><td></td><td><input type='submit' value='Supprimer'></td></tr>";
echo "</table></form>"
?>
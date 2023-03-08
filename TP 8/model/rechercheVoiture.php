<?php
include_once ("voiture.php");
$v=new voiture();
$s=$_POST['s'];
$tab=$v->recherche($s);
if ($tab->rowCount()!=0){
    echo "<h2>Liste des voiture :".$s."</h2>";
    echo "<table border='1'><tr><td>numéro de serie</td><td>Marque</td><td>Prix de location</td></tr>";
    foreach ($tab as $row){
        echo "<tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row['prixlocation']."</td>
        </tr>";
    }
    echo "</table>";
}
else {
    echo "<script>
            alert ('aucune voiture trouvée pour ce type de carburant');
          </script>";
}
?>
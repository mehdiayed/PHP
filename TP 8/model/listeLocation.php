<?php 
include_once ("location.php");
$l=new Location();
$tab=$l->affiche();
//print_r($tab);
echo "<h2>Liste des locations</h2>
<table border='2'>
    <tr>
        <th colspan='3'>location</th>
        <th colspan='2'>Voiture</th>
        <th colspan='3'>client</th>
    </tr>;";
    echo "<tr>
    <td>identifiant</td>
    <td>nbr de jour</td>
    <td>date</td>
    <td>Marque</td>
    <td>Numéro de série</td>
    <td>Numéro Cin</td>
    <td>nom</td>
    <td>prénom</td>
    </tr>";
foreach ($tab as $row){
    echo "<tr>
    <td>".$row['idlocat']."</td>
    <td>".$row['nbrjour']."</td>
    <td>".$row['dateloc']."</td>
    <td>".$row['marque']."</td>
    <td>".$row['numserie']."</td>
    <td>".$row['ncin']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['prenom']."</td>
    </tr>";
}
echo "</table>";


?>
<?php
    include_once ("location.php.");
    $l=new location();
    $l->idclient=$_POST['s1'];
    $l->idvoiture=$_POST['s2'];
    $l->nbrjour=$_POST['b'];
    $l->dateloc=$_POST['a'];
    $ok=$l->insert();
    if ($ok){
        echo "insertion terminer avec succée";
    }
    else{
        echo "probleme d'insertion!!!!";
    }
?>
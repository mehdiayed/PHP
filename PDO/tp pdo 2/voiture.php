<?php
include_once("modele.php");
class Voiture extends Modele
{
    private $idVoiture, $numSerie, $marque, $carburant, $prixLocation;
    function __construct($idVoiture = "", $numSerie = "", $marque = "", $carburant = "", $prixLocation = "")
    {

        $this->idVoiture    = $idVoiture;
        $this->numSerie     = $numSerie;
        $this->marque       = $marque;
        $this->carburant    = $carburant;
        $this->prixLocation = $prixLocation;

        parent::__construct();
    }

    function insert($idVoiture, $numSerie, $marque, $carburant, $prixLocation)
    {
        $query = 'INSERT INTO Voiture (idVoiture,numSerie,marque,carburant,prixLocation) VALUES (?, ?, ?, ?,?)';
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idVoiture, $numSerie, $marque, $carburant, $prixLocation));
    }

    function delete($idVoiture)
    {
        $query = "DELETE from voiture where idVoiture=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idVoiture));
    }

    function liste()
    {
        $query = "SELECT * from voiture";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
}

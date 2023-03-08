<?php
include_once("modele.php");
class emprunter extends Modele
{
    private $codeE, $codeL, $date;
    function __construct()
    {

        parent::__construct();
    }


    function empr($date, $codeE, $codeL)
    {
        $query = "insert into emprunter values(?,?,?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($date, $codeE, $codeL));
    }

    function delet($codeE, $codeL)
    {
        $query = "delete from emprunter where Codelivre = ? and Codeetudiant=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($codeE, $codeL));
    }

    function lister()
    {
        $query = "select * from livre ";
        $res = $this->pdo->prepare($query);
        $res->execute();

        return $res;
    }
}

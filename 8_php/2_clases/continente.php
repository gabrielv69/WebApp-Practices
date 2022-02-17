<?php
class Continente{
    private $continenteId;
    private $continenteNombre;

    //Constructor
    function __construct(){
    }

    //Getter and setter
    public function getId(){
        return $this->continenteId;
    }
    public function setId($idContinente){
        $this->continenteId = $idContinente;
    }
    public function getnombre(){
        return $this->continenteNombre;
    }
    public function setNombre($nombreContinente){
        $this->continenteNombre = $nombreContinente;
    }

    public function toString(){
        return $this-> continenteId . " | " . $this->continenteNombre;
    }

}

$miContinente = new Continente();
$miContinente 
?>
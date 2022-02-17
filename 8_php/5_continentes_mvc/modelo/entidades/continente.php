<?php
class Continente{
    private $continenteId;
    private $continenteNombre;

    function __construct()
    {
        
    }

    public function getContinenteId(){
        return $this->continenteId;
    }

    public function getContinenteNombre(){
        return $this->continenteNombre;
    }

    public function setContinenteId($idContinente){
        $this->continenteId = $idContinente;
    }

    public function setContinenteNombre($nombreContinente){
        $this->continenteNombre = $nombreContinente;
    }

}

?>
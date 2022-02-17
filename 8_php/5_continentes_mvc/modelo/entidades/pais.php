<?php
class Pais{
    private $paisId;
    private $paisNombre;
    private $continenteId;

    function __construct()
    {
        
    }

    public function getPaisId(){
        return $this->paisId;
    }

    public function getPaisNombre(){
        return $this->paisNombre;
    }

    public function getContinenteId(){
        return $this->continenteId;
    }

    public function setpaisId($idPais){
        $this->paisId = $idPais;
    }

    public function setPaisNombre($nombrePais){
        $this->paisNombre = $nombrePais;
    }

    public function setContinenteId($idContinente){
       $this->continenteId = $idContinente;
    }

  
}

?>
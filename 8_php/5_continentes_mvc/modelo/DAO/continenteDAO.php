<?php
require_once($_SERVER['DOCUMENT_ROOT']. "/practicas_appwebcom/8_PHP/5_continentes_mvc/utilerias/utilerias.php" );
require_once( UTILERIAS."cnn.php");
require_once(MODELO."entidades/continente.php");
class ContinenteDAO{
    const SQL_CONSULTAR = "SELECT * FROM CONTINENTE";
    const SQL_CONSULTAR_POR_ID = "SELECT * FROM CONTINENTE WHERE CONT_ID = ?";
    function __construct()
    {
        
    }

    public function getContinentes(){
        $continentesArray = array();
        $cnn = ConexionDB::getConection();
        $stmt = $cnn->prepare(self::SQL_CONSULTAR);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado){
            while($fila=$resultado->fetch_assoc()){
                $continente = new Continente();
                $continente->setContinenteId($fila["CONT_ID"]);
                $continente->setContinenteNombre($fila["CONT_NOMBRE"]);
                array_push($continentesArray,$continente);
            }
        }
        $stmt->close();
        $resultado->free();
        ConexionDB::cerrarConexion($cnn);
        return $continentesArray;
     }  	    
    

    public function getContinentePorId($idContinente){
        $cnn = ConexionDB::getConection();
        $stmt = $cnn->prepare(self::SQL_CONSULTAR_POR_ID);
        $stmt->bind_param("i",$idContinente);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        ConexionDB::cerrarConexion($cnn);
        if($resultado){
            $fila= $resultado->fetch_assoc();
            $continente = new Continente();
            $continente->setContinenteId($fila['CONT_ID']);
            $continente->setContinenteNombre($fila['CONT_NOMBRE']);
        }
        return $continente;
    }
}
?>
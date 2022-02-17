<?php
require_once($_SERVER['DOCUMENT_ROOT']. "/practicas_appwebcom/8_PHP/5_continentes_mvc/utilerias/utilerias.php" );
require_once( UTILERIAS."cnn.php");
require_once(MODELO."entidades/pais.php");

class PaisDAO{
    const SQL_CONSULTAR = "SELECT * FROM PAIS";
    const SQL_CONSULTAR_POR_ID = "SELECT * FROM PAIS WHERE PAIS_ID = ?";
    const SQL_CONSULTAR_POR_IDCONTINENTE = "SELECT * FROM PAISE WHERE CONT_ID=?";
    const SQL_INSERTAR = "INSERT INTO PAIS (PAIS_NOMBRE, CONT_ID) VALUES (?,?)";
    function __construct()
    {
        
    }

    public function getpaises(){

     }  	    
    

    public function getPaisPorId($idPais){
        $cnn = ConexionDB::getConection();
        $stmt = $cnn->prepare(self::SQL_CONSULTAR_POR_ID);
        $stmt->bind_param("i",$idPais);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        ConexionDB::cerrarConexion($cnn);
        if($resultado){
            $fila= $resultado->fetch_assoc();
            $pais = new Continente();
            $pais->setContinenteId($fila['CONT_ID']);
            $pais->setContinenteNombre($fila['CONT_NOMBRE']);
        }
        return $pais;
    }

    public function getPaisesPorContinenteId($idContinente){
        $paisesArray = array();
        $cnn = ConexionDB::getConection();
        $stmt = $cnn->prepare(self::SQL_CONSULTAR_POR_IDCONTINENTE);
        $stmt->bind_param("i",$idContinente);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado){
            while($fila=$resultado->fetch_assoc()){
                $pais = new Pais();
                $pais->setpaisId($fila["PAIS_ID"]);
                $pais->setPaisNombre($fila["PAIS_NOMBRE"]);
                $pais->setContinenteId($fila["CONT_ID"]);
                array_push($paisesArray,$pais);
            }
        }
        $stmt->close();
        $resultado->free();
        ConexionDB::cerrarConexion($cnn);
        return $paisesArray;
    }

    public function create($pais){
        $cnn = ConexionDB::getConection();
        $stmt = $cnn->prepare(self::SQL_INSERTAR);
        $paisNombre = $pais->getPaisNombre();
        $continentePais = $pais->getContinenteId();
        $stmt->bind_param("si",$paisNombre,$continentePais);
        $resultado = $stmt->execute();
        $stmt->close();
        ConexionDB::cerrarConexion($cnn);
        return $resultado;

    }


    public function delete($pais){

    }
    public function update($pais){

    }
}
?>
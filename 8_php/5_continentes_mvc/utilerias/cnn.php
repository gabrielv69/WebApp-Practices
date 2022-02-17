<?php
class ConexionDB{
    public static function getConection(){
        $host= "localhost";
        $usuario = "root";
        $clave = "";
        $bdd = "testContinente";
        $conexion = new mysqli($host, $usuario, $clave, $bdd) or die($conexion-> connect_erno);
        $conexion->set_charset("UTF-8");
        return $conexion;    
    }

    public static function cerrarConexion($cnn){
        $cnn->close();
    }
}
?>
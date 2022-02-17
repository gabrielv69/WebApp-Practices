<?php
//INICIAMOS SERVICIO DE SESIONES EN EL SERVIDOR
session_start(); 
if(isset($_POST)){
    //Creo Sesiones
    $_SESSION["usuario"]= $_POST["nombre"];
    $_SESSION["clave"]= $_POST["clave"];
    //Redireccion a mi panel
    header("Location:mipanel.php");

}else{
    //Regresar a Login (index)
    header("Location:index.php");

}
?>
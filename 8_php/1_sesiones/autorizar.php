<?php
//INICIA SERVICIO DE SESIONES
session_start();
//obtener usuario y clave del usuario
if(isset($_POST[ "nombre"]) && isset($_POST["clave"])){
    $nombre = $_POST[ "nombre"];
    $clave= $_POST["clave"];

    //seteo sesión
    $_SESSION["session_nombre"]= $nombre;

    //Verificar si el usuario seleccionó recordarme para crear las cookies
    if(isset($_POST["recordarme"])){
        setcookie("cookie_nombre",$nombre, time()+60*60*24);
        setcookie("cookie_clave",$clave, time()+60*60*24);
    }else{
        //Elimino cookies si estas existen
        if(isset($_COOKIE)){
            foreach($_COOKIE as $name => $value){
                setcookie($name, '', 1);
            }
        }
    }
    header("Location: panel_principal.php");
}else{
    header("Location: index.php");
}
?>
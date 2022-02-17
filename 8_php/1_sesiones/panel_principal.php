<?php
session_start();
if($_SESSION["session_nombre"]){
    $nombre = $_SESSION[ "session_nombre"];
}else{
    header("Location: index.php");
}

function leerArchivo(){
    $lang = "en"; 
    //Obtener parámetro lang de lenguaje
    if(isset($_GET[ 'lang'])){
        $lang = $_GET[ 'lang'];
        setcookie("cookie_idioma", $lang, time()+60*60*24);
    }else{
        if(isset($_COOKIE['cookie_idioma'])){
            $lang = $_COOKIE['cookie_idioma'];
        }
    }

    //Leer fichero correspondiente
    echo $titulo = ($lang=="en")? "<h2>Product list</h2>": "<h2> Lista de productos</h2>";
    $file = ($lang=="en")? "categorias_en.txt": "categorias_es.txt";
    $fp = fopen($file, "r");
    while($line = fgets($fp)){
      echo $line . "<br>";
    }
    fclose($fp);
}

?>

<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Panel Principal</title>
</head>
<body>
    <h1>LOGIN </h1>
    <p> Binvenido user <?php echo $nombre?></p><br><br>
    <a href= "cerrarsesion.php"> Salir</a><br><br>

    <a href= "panel_principal.php?lang=es"> ES (Español)</a> |  <a href= "panel_principal.php?lang=en"> EN (English)</a>
    <!--Lista de Productos -->
    <?php  leerArchivo();?>
</body>
</html>


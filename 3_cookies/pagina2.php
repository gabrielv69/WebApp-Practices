<?php
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"] ;
    $sexo = $_POST["hm"]; 

    #CREACIÓN COOKIES
    # echo // aqui no vale porque  cookies debe estar antes de cualquier salida 
    setcookie("usuario", $nombre, time()+60*60*24*365);
    setcookie("clave_usuario", $clave, time()+60*60*24*365);
    setcookie("sexo", $sexo, time()+60);

    echo "Nombre: ".$nombre. " Clave ".$clave. " Sexo: ".$sexo; 

    echo"<h2>ARRAY COOKIE</h2>";
    print_r($_COOKIE);
?>
<html>
    <head>
        <title> Recepción Datos</title>
    </head>
    <body>  
    <?php if (isset($_COOKIE)){?>
                                     <!-- php -->              
         <h2>Bienvenido/a  <?php echo $_COOKIE["usuario"] ?> </h2>
        <p>Tu género es   <?php echo $_COOKIE["sexo"] ?></p>
    <?php }else{?>
     <p> lo siento! no están seteadas las cookies</p>
    <?php  }  ?>
    <br><a href= "borrarcookies.php">Borrar Cookies</a>
    </body>
</html>
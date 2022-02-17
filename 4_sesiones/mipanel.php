
<?php
    //uitilizo mismo servicio sesiones
    session_start();
    //validamos que las sessiones existean y no estén vacías
    if($_SESSION["usuario"]==""|| $_SESSION["usuario"]==null){
        header("Location:index.php");
    }
?>
<html>
    <head></head>
    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h3>Bienvenido usuario  <?php echo $_SESSION["usuario"]; ?> </h3>
        <p><a href= "cerrarsesion.php">Cerrar Sesión</a></p>
    </body>
</html>
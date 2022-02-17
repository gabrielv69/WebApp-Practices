
<html>
    <head></head>
    <body>
        <p>Parámetros enviador por el cliente: ($_GET) </p>
        <?php  print_r($_GET);?>
        <br>
        <h2>Información GET</h2>
        Nombre: <?php echo $_GET["varNombre"]; ?>
        <br>
        Email:  <?php echo $_GET["email"]; ?>
        <h3>Gracias por su pago con la Tarjeta <?php echo $_GET["numTarjeta"]; ?></h3>
    </body>
</html>
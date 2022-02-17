<html>
    <head></head>
    <body>
        <p>Parámetros enviador por el cliente: ($_POST) </p>
        <?php  var_dump($_POST);?>
        <br>
        <h2>Información POST</h2>
        Nombre: <?php echo $_POST["varNombre"]; ?>
        <br>
        Email:  <?php echo $_POST["email"]; ?>
        <h3>Gracias por su pago con la Tarjeta <?php echo $_POST["numTarjeta"]; ?></h3>
    </body>
</html>
<html>
    
    <head>
    </head>

    <body>
        <h1>Petición con GET</h1>
        <form method= "GET" action= "pagina2_resp_get.php">
        <fieldset>
            <legend>Información para pago virtual</legend>
            Nombre: <input type="text" name="varNombre"> <br>
            Email: <input type="text" name="email"> <br>
            Número Tarjeta Crédito: <input type="text" name="numTarjeta"> <br>
            CVV: <input type="text" name="cvv"> <br>
            <input type="submit" value= "Realizar pago">
        </fieldset>
        </form>

        <h1>Petición con POST</h1>
        <form method= "POST" action= "pagina2_resp_post.php">
        <fieldset>
            <legend>Información para pago virtual</legend>
            Nombre: <input type="text" name="varNombre"> <br>
            Email: <input type="text" name="email"> <br>
            Número Tarjeta Crédito: <input type="text" name="numTarjeta"> <br>
            CVV: <input type="text" name="cvv"> <br>
            <input type="submit" value= "Realizar pago">
        </fieldset>
        </form>


    </body>
</html>


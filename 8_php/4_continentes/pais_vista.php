<?php
if(isset($_GET)){
    $idContinente = $_GET[ "continente"];
    include_once("cnn.php");
    $sql="SELECT * FROM CONTINENTE WHERE CONT_ID=?";
    $stmt= $conexion->prepare($sql);
    $stmt->bind_param("i",$idContinente);
    $stmt->execute();
    $result= $stmt->get_result();
    $filas= $result->num_rows;
    if($filas>0){
        $continente = $result->fetch_row();
        $nombreContinente = $continente[1];
    }
    $stmt->close();
    $result->free();
    $conexion->close();
}else{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pais</title>
</head>
<body>
    <h1>País</h1>
    <p><a href="index.php">Regresar a Continentes</a></p>
    <form method="POST" action="pais_insertar.php">
        <input type="hidden" value="<?php echo $idContinente;?>" name="txtIdContinente"/>
        <p>Continente:<?php echo $nombreContinente;?></p>
        <label for= "txtnombre">Nombre país</label><br>
        <input type="text" id="txtnombre" name="txtnombre"><br><br>
        <input type="submit" value = "Guardar"/>
    </form>
</body>
</html>
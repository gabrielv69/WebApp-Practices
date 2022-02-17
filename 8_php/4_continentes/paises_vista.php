<?php
if(isset($_GET)){
    $idContinente = $_GET[ "idContinente"];
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
    <title>Document</title>
</head>
<body>
    <?php
    include_once("cnn.php");
    $sql = "SELECT * FROM CONTINENTE WHERE CONT_ID = ?;";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i",$idContinente);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows>0){
        $continente = $result->fetch_row();
        //var_dump($continente);
    }
    //$stmt->close();
    //$conexion->close();
    ?>
    <h1>Paises de <?php echo $continente[1] ?></h1>
    <p><a href="index.php">Regresar a Continente</a> | <a href="pais_vista.php?continente=<?php echo $idContinente;?>">Crear Pais</a></p>
    <table border =1>
        <tr>
            <th>PAIS</th>
            <th>Opciones</th>
        </tr>
        <?php
        $sql = "SELECT * FROM PAIS WHERE CONT_ID = ?;";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i",$idContinente);
        $stmt->execute();
        $result = $stmt->get_result();
        $numeroFilas = $result->num_rows;
        if($numeroFilas >0){
            while($row = $result->fetch_assoc()){
                echo '<tr><th>'.$row["PAIS_NOMBRE"].'</th>';
                echo '<th>Actualizar | <a href="pais_eliminar.php?idPais='.$row["PAIS_ID"].'&idContinente='.$idContinente.'">Eliminar</a></th></tr>';
            }
        }
        $stmt-> close();
        $conexion->close();
        ?>
        <!--<tr>
            <th>ECUADOR</th>
            <th>Actualizar | Eliminar</th>
        </tr>-->
    </table>

</body>
</html>
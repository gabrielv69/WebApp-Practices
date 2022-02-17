<?php
if(isset($_POST)){
    $idContinente=$_POST["txtIdContinente"];
    $nombre= $_POST["txtnombre"];
    include("cnn.php");
    $sql = "INSERT INTO PAIS (PAIS_NOMBRE,CONT_ID) VALUES(?,?)";
    $stmt=$conexion->prepare($sql);
    $stmt->bind_param("si",$nombre,$idContinente);
    $resultado = $stmt->execute();
    $stmt -> close();
    $conexion->close();
    if($resultado){
        header("Location: paises_vista.php?idContinente=".$idContinente); //PAISES_VISTA NECESITA COMO PARAMETRO EL ID, ES NECESARIO MANDARLE PARA ABRIR LA PAGINA
    }else{
        die("Error al insertar");
    }
}
?>
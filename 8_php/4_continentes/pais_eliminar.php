<?php
if(isset($_GET)){
    $idPais=$_GET["idPais"];
    $idContinente= $_GET["idContinente"];
    include("cnn.php");
    $sql = "DELETE FROM PAIS WHERE PAIS_ID = ?";
    if($stmt = $conexion-> prepare($sql)){
        $stmt ->bind_param("i", $idPais);
        if(!$stmt->execute()){
            die("ERROR DELETE");
        }
        header("Location: paises_vista.php?idContinente=".$idContinente);
        $stmt-> close();
    }else{
        die("DELETE MAL PREPARADO");
    }
}
?>

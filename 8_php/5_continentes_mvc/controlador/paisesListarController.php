<?php
require_once($_SERVER['DOCUMENT_ROOT']. "/practicas_appwebcom/8_PHP/5_continentes_mvc/utilerias/utilerias.php" );
require_once(MODELO."DAO/continenteDAO.php");
require_once(MODELO."DAO/paisDAO.php");
//1.Recibo datos del request
if(isset($_GET["idContinente"])){
    //2. Obtengo datos del modelo
    $continenteDAO = new ContinenteDAO();
    $continentes = $continenteDAO->getContinentePorId($_GET[ 'idContinente']);
    $paisDao = new PaisDAO();
    $paises= $paisDao->getPaisesPorContinenteId($_GET[ 'idContinente']);
    //3 llamo vista para mostrar datos del modelo 
    require_once( VISTA."paisesListarView.php");
}else{
    header("Location: continentesListarController.php");
}



?>
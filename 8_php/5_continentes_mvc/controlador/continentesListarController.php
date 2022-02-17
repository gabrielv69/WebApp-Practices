<?php
require_once($_SERVER['DOCUMENT_ROOT']. "/practicas_appwebcom/8_PHP/5_continentes_mvc/utilerias/utilerias.php" );
//1.Recibo datos del request
//2. Obtengo datos del modelo

require_once(MODELO."DAO/continenteDAO.php");

$continenteDAO = new ContinenteDAO();
$continentes = $continenteDAO->getContinentes();

//3 llamo vista para mostrar datos del modelo 
require_once( VISTA."continentesListarView.php");
?>
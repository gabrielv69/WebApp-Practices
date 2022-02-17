<?php
include_once "continente.php";
$continentes = array();
$cont1 = new Continente();
$cont1->setId(1);
$cont1->setNombre("América");
//Agregar item a Array
array_push($continentes,$cont1);

$cont2 = new Continente();
$cont2->setId(2);
$cont2->setNombre("Europa");
//Agregar item a Array
array_push($continentes,$cont2);

//Lectura arrat continentes
foreach($continentes as $continente){
    echo $continente->toString();
    echo "<br>";
}
?>
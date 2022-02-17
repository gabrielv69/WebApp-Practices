
<h1>CODIGO HTML</H1>


<?php
#Comentario

#Imprimir en pantalla
print "Hola mundo :v";
echo "<br>";
echo "Adios mundo :c";
echo "<br>";
print "Bueno y ahora qué xd?";

#VARIABLES
$pais= "Ecuador";
$numero = 2021;
$numeroTexto = "2020";
$bandera1 = true;
$bandera2 = false;

#CONCATENAR Usamos el punto
echo "<br><br>";
echo $pais." es rico y diverso. El ". $pais. " del ". $numero;
echo "<br><br>";

echo "valor bandera 1:". $bandera1;
echo "<br>";
echo "valor bandera 2:". $bandera2;


#ARREGLOS
$estadoCivil = array("soltero", "casado", "viudo");
echo "<br><br>";
print_r($estadoCivil);
echo "<br>";
echo "Estado civil[2]: ". $estadoCivil[2];

#ARRAYS CLAVE VALOR
$estadoCivilClaveValor = array("clave1"=>"soltero", "clave2"=>"casado", "clave3"=>"viudo");
echo "<br>";
echo "Estado Civil2, pos 3   ". $estadoCivilClaveValor["clave3"];
?>
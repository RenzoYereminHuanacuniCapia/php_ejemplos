<?php

include("15-polimorfismo.php");

echo "AREA DE TRIANGULO\n";
echo "INGRESE LA BASE :";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA :";
$h=fgets(STDIN);
$triangulo = new Triangulo($b,$h);
$area=$triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES ".$area;

echo "AREA DE RECTANGULO\n";
echo "INGRESE LA BASE :";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA :";
$a=fgets(STDIN);
$rectangulo = new Rectangulo($b,$a);
$area=$rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES ".$area;

echo "AREA DE CUADRADO\n";
echo "INGRESE EL LADO :";
$l = trim(fgets(STDIN));
$cuadrado = new Cuadrado($l);
$areaCuadrado = $cuadrado->calcularArea();
echo "EL AREA DEL CUADRADO ES " . $areaCuadrado . "\n";

echo "AREA DE CIRCULO\n";
echo "INGRESE EL RADIO :";
$r = trim(fgets(STDIN));
$circulo = new Circulo($r);
$areaCirculo = $circulo->calcularArea();
echo "EL AREA DEL CIRCULO ES " . $areaCirculo . "\n";

?>

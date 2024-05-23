<?php

interface Figura {
    public function calcularArea();
}

class Triangulo implements Figura {
    public $base;
    public $altura;

    public function __construct($b, $h) {
        $this->base = $b;
        $this->altura = $h;
    }

    public function calcularArea() {
        $area = ($this->base * $this->altura) / 2;
        return $area;
    }
}

class Rectangulo implements Figura {
    public $base;
    public $altura;

    public function __construct($b, $a) {
        $this->base = $b;
        $this->altura = $a;
    }

    public function calcularArea() {
        $area = ($this->base * $this->altura);
        return $area;
    }
}

echo "AREA DE TRIANGULO\n";
echo "INGRESE LA BASE :";
$b = trim(fgets(STDIN));
echo "INGRESE LA ALTURA :";
$h = trim(fgets(STDIN));
$triangulo = new Triangulo($b, $h);
$areaTriangulo = $triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES " . $areaTriangulo . "\n";

echo "AREA DE RECTANGULO\n";
echo "INGRESE LA BASE :";
$b = trim(fgets(STDIN));
echo "INGRESE LA ALTURA :";
$a = trim(fgets(STDIN));
$rectangulo = new Rectangulo($b, $a);
$areaRectangulo = $rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES " . $areaRectangulo . "\n";

?>
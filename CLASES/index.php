<?php
require_once("clases/figuras.php")
$cuadrado = new Cuadrado(5);
echo "Area del cuadrado: " . $cuadrado->area() . "<br>";

$circulo = new Circulo(5);
echo "Area del círculo: " . $circulo->area() . "<br>";

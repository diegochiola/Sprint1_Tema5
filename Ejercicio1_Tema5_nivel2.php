<?php
//Llamar a las clases
require ('Shape.php');
require ('Rectangulo.php');
require ('Triangulo.php');

//instanciar e inicializar

$nuevoRectangulo = new Rectangulo(8,5);
echo "El Area del rectangulo es: " . $nuevoRectangulo->calcularArea(8,5) ." cm2.<br>";
$nuevoTriangulo = new Triangulo(10,6);
echo "El Area del triangulo es: " .$nuevoTriangulo->calcularArea(10,6) ." cm2.<br>";
?>
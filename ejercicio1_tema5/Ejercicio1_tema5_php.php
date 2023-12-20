<?php
//Llamar a las clases
require ('Animales.php');
require ('Perro.php');
require ('Gato.php');

//Creo animales 
$nuevoPerro = new Perro("Doggy");
$nuevoGato = new Gato("Frida");

//llamo a los metodos y los imprimo
echo $nuevoPerro->makeSound() . "<br>";
echo $nuevoGato->makeSound() . "<br>";

?>


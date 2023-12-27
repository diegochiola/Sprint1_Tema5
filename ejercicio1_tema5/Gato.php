<?php
require_once("Animales.php");

class Gato extends Animales{
//metodo emitir sonido
    public function makeSound(){
    echo "Miauuuu, Miauuu!";
}

}

?>
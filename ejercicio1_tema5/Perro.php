<?php
require_once("Animales.php");

class Perro extends Animales{

    //metodo emitir sonido
public function makeSound(){
    echo "Bup, bup!";
}

}
?>
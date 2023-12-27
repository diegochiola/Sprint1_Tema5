<?php
require_once("Animal.php");

abstract class Animales implements Animal{
    public $nombre;

//metodo constructor
public function __construct(string $nombre){
 $this->nombre = $nombre;
}

//se implementan todos los metodos creados en la interface Animal, en este caso makesound
abstract public function makeSound();
//no puede tener cuerpo esta funcion ya que cada animal le otorgara el sonido especifico a traves de un echo
}
?>
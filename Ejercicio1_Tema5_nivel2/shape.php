<?php
class Shape{
    //Atributos
    public $ancho;
    public $alto;

    //Metodo constructor
    function __construct(int $ancho, int $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
  
}

?>
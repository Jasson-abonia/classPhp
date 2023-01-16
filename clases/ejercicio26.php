<?php

class persona{
    public $nombre; //propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this -> nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ // acciones o metodos...
        $this -> nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "hola soy ".$this -> nombre."<br/>";
    }
    public function mostrarEdad(){
        $this -> edad = 27;
        return $this -> edad;
    }
    public function mostrarAltura(){
        $this -> altura = 1.85;
        return $this -> altura;
    }
} 

$objeAlumno = new persona("abonia"); //instacia o creaccion de un objeto
echo $objeAlumno -> imprimirNombre(); // llamando un metodo

?>
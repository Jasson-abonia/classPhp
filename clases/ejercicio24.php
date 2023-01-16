<?php

class persona{
    public $nombre; //propiedades
    private $edad;
    protected $altura;

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

$objeAlumno = new persona(); //instacia o creaccion de un objeto
$objeAlumno -> asignarNombre("jasson"); // llamando un metodo

$objeAlumno2 = new persona();
$objeAlumno2 -> asignarNombre("brayan");
$objeAlumno2 -> imprimirNombre();

echo $objeAlumno -> nombre;
echo $objeAlumno2 -> nombre;
echo $objeAlumno2 -> mostrarEdad(); //private
echo $objeAlumno2 -> mostrarAltura(); // protect

?>
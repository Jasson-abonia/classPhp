<?php

// clase de herencia de class

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

class trabajador extends persona{
    public $puesto; // propiedad nueva
    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre."soy un ".$this->puesto;
    }
}


$objTrabajador = new trabajador(); //instacia o creaccion de un objeto
$objTrabajador -> asignarNombre("jasson"); // llamando un metodo
$objTrabajador -> puesto = "desarrollador";

echo $objTrabajador -> presentarseComoTrabajador();

?>
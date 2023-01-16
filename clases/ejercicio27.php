<?php

class UnaClase{
    
    public static function unMetodo(){ // acciones o metodos...
        echo "Hola soy un metodo estatico";
    }
    
} 

$obj = new UnaClase(); //instacia o creaccion de un objeto
$obj -> unMetodo(); // llamando un metodo

unaClase::unMetodo();

?>
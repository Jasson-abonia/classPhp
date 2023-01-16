<?php

$frutas = array("M"=>"manzana","F"=>"fresa","P"=>"pera");

print_r($frutas);
echo $frutas["P"]."<br/>";

foreach($frutas as $indice => & $valor){
    echo "El vallor ".$valor." tiene el indice: ".$indice."<br/>";
}
?>
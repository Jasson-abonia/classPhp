<?php

$frutas = array("manzana","fresa","pera");

print_r($frutas);
echo $frutas[2]."<br/>";

    for($indice = 0; $indice < 3; $indice++){
        echo $frutas[$indice]."<br/>";
    }
?>
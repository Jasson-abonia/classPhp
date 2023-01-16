<?php

$jsonContenido='[
    {"nombre":"jasson", "apellido":"abonia"},
    {"nombre":"brayan", "apellido":"guaza"}
]';

$resultado= json_decode($jsonContenido);
//print_r($resultado);

foreach($resultado as $person){
    echo ($person->nombre)." ".($person->apellido)."<br/>";
}

?>
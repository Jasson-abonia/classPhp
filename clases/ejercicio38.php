<?php 

// para abrir y leer un archivo

$archivo="contenido.txt";
$archivoAbierto=fopen($archivo, "r");
$contenido=fread($archivoAbierto, filesize($archivo));
echo $contenido;

?>
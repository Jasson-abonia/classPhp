<?php 

// para abrir y leer un archivo

$nombreArchivo="archivo.txt";

$contenidoArchivo="Hola, soy un archivo nuevo";

$archivoACrear=fopen($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);

?> 
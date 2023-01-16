<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contrasenia = "";

try{

    $conexion = new PDO("mysql:host=$servidor; dbname=albun", $usuario, $contrasenia );
    $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'manejando db', 'imagen.jgp');";

    $conexion->exec($sql);

    echo "conexion estableciada";


}catch(PDOException $error){
    echo "Conexion erronea ".$error;
}

?>

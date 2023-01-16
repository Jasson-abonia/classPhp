<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contrasenia = "";

try{

    $conexion = new PDO("mysql:hot=$servidor:dbname=albun", $usuario, $contrasenia );
    $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
    $resultado = $sentencia -> fetchAll();

    print_r($resultado);


    echo "conexion estableciada";


}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>

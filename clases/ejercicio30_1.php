<?php

session_start();

if(isset($_SESSION["usuario"])){ // isset es para saver si hay algo vacio o si tiene algo

    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

}else{

    echo "No hay datos";

}


?>

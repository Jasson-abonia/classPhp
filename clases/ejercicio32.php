<?php


if($_POST){
    print_r($_POST);
    print_r($_FILES['archivo']['name']); // para leer archivo de un input file
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']); // para copiar un archivo de una direccion a otra

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
   
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        <h4>imagen:</h4>
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" name="enviar" value="Enviar informacion">
    </form>
</body>
</html>
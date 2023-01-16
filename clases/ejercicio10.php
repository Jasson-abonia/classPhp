<?php
    
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        $suma = $valorA + $valorB;

        if($valorA > $valorB){
            echo "El valor de A es mayor que el valor de B";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores arimeticos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        Valor A:
        <input type="text" name="valorA">
        <br/>
        Valor B:
        <input type="text" name="valorB">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
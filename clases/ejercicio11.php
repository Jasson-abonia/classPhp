<?php
    
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        $suma = $valorA + $valorB;

        echo "la suma es: " .$suma ;
    }
    /*
    if({$valorA==$valorB} && {$valorA==4}){
        echo "El valor de A es igual al valor de B y es un numero 4";
    }*/
    
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
    <form action="ejercicio11.php" method="post">
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
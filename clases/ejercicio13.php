<?php
    
    if($_POST){
        $button = $_POST['button'];

        switch($button){

            case 1:
                echo "Presiono el boton 1";
            break;
            case 2:
                echo "Presiono el boton 2";
            break;
            case 3:
                echo "Presiono el boton 3";
            break;
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
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="button" value="1">
        <br/>
        <input type="submit" name="button" value="2">
        <br/>
        <input type="submit" name="button" value="3">
    </form>
</body>
</html>
<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";
$txtComentario="";

if($_POST){

    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";
    $lsAnime= (isset($_POST['lsAnime']))?$_POST['lsAnime']:"";
    $txtComentario= (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
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
    <?php if($_POST){?>
    <strong>Hola</strong> <?php echo $txtNombre; ?><br/>
    <strong>Tu lenguaje es:</strong> <?php echo $rdgLenguaje; ?><br/>
    <strong>El Anime que te gusta es:</strong> <?php echo $lsAnime; ?><br/>
    <h3>Estas aprediendo:</h2>
    -<?php echo ($chkphp=="checked")?"PHP":""; ?><br/>
    -<?php echo ($chkhtml=="checked")?"HTML":""; ?><br/>
    -<?php echo ($chkcss=="checked")?"CSS":""; ?><br/>
    <h3>Tu comentario es:</h3>
    <p><?php echo $txtComentario; ?></p>
    <?php }?>
   
    <form action="ejercicio31.php" method="post">

        <p>Nombre:</p>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>
        <p>¿Te gusta?:
        <br/><p>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":""?> name="lenguaje" value="php" id=""></p>
        <br/><p>html:<input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":""?> name="lenguaje" value="html" id=""></p>
        <br/><p>css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":""?> name="lenguaje" value="css" id=""></p>

        <h2>Estas aprediendo...</h2>
        <p>php<input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id=""></p>
        <p>html<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id=""></p>
        <p>css<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id=""></p>
        <br/>
        <h2>Que animes te gustan?...</h2>
        <select name="lsAnime" id="">
            <option value="">Ninguna Serie</option>
            <option value="Naruto" <?php echo ($lsAnime=="Naruto")?"selected":""?> >Naruto</option>
            <option value="Dragon" <?php echo ($lsAnime=="Dragon")?"selected":""?> >Dragon Ball</option>
            <option value="Ben" <?php echo ($lsAnime=="Ben")?"selected":""?> >Ben 10</option>
        </select>
        <br/>
        <h3>Tienes alguna duda?</h3>
        <textarea name="txtComentario" id="" cols="30" rows="10">
        <?php echo $txtComentario; ?>
        </textarea>
        <br/>
        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>
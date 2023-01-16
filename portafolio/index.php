<?php include ('cabecera.php'); ?>
<?php include ('conexion.php'); ?>

<?php 
$objconexion = new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `proyectos`");

?>
    
    <div class="row align-items-md-stretch">
        <div class="col-md-12">
            <div
                class="h-100 p-5 text-white bg-primary border rounded-3">
                <h2>Bienvenidos</h2>
                <p>Este es mi portafolio privado</p>
                <button class="btn btn-outline-primary" type="button">Mas informacion</button>
            </div>
        </div>
        <br/>
        <br/>
        <?php foreach($proyectos as $proyecto){?>
            <div class="col">
                <div class="card">
                <img src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" style="    width: 100%; height: 300px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
                    <h6 class="card-title">ID: <?php echo $proyecto['id']; ?></h6>
                    <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
                </div>
                </div>
            </div>
        <?php } ?>
    </div>

<?php include ('pie.php'); ?>
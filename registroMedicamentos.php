<?php include("./database/db.php");
    //agregar la coneccion con include(documento)
?>
<?php include ("includes/header.php")?>
 
<!--registro de medicamentos-->
<div class="container p-4">
    <div class="row">
        <div class="col- md-4">
            <div class=" card card-body">
            <?php //cuadro de verificacion de guardado
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset(); } ?>
                    <!--formulario de registro de medicamentos-->
                <form action="ingresoMedicamentos.php" method="POST">
                    <h3 class="text-center">Registro de medicamentos</h3>
                    <div class="form-group">
                        <label for="nombre"> Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Medicamento">
                    </div>
                    <div class="form-group">
                        <label for="tipoMedicamento">Tipo De medicamento</label>
                        <input type="text" name="tipoMedicamento" class="form-control" placeholder="ej. Analgésicos,Antiácidos,Antialérgicos " >
                    </div>
                    <div class="form-group">
                        <label for="Cantidad">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" placeholder="Cantidad">
                    </div>
                    <div class="form-group">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" name="proveedor" class="form-control" placeholder="Proveedor">
                    </div>
                    <div class="form-group">
                        Laboratorio
                        <input type="text" name="laboratorio" class="form-control" placeholder="Laboratorio">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block mt-3" name="Guardar" value="Registrar">
                </form>
            </div>
        </div>
        
    </div>
    
</div>


<?php include ("includes/footer.php")?>
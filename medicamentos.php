<?php include("./database/db.php");
    //agregar la coneccion con include(documento)
?>
<?php include ("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md">
        <?php //cuadro de verificacion de guardado
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset(); } ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo de Medicamento</th>
                        <th>Cantidad</th>
                        <th>Proveedor</th>
                        <th>laboratorio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM registromedicamentos";
                    $resultado = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($resultado)){ ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['tipoMedicamento']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td><?php echo $row['proveedor']; ?></td>
                            <td><?php echo $row['laboratorio']; ?></td>
                            <td>
                                <a href="editMedicamentos.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminarMedicamentos.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

</div>
<div class="container text-center d-flex justify-content-center">
    <div class="row d">
    <a href="registroMedicamentos.php" class="btn btn-primary">Registrar Medicamentos</a>   
    </div>
    
</div>
<?php include ("includes/footer.php")?>
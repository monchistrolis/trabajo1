<?php include("./database/db.php");
//agregar la coneccion con include(documento)
?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <!--inicio de formulario 4 de espacio-->
        <div class="col-md-4">
            <div class="card">
                <?php //cuadro de verificacion de guardado
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset();
                } ?>
                <div class="card-header">
                    <h3>Registro de Doctores</h3>
                </div>
                <div class=" card-body">
                    <form action="doctoresRegistrados.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" name="nombre_com" class="form-control" placeholder="Nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="cedula">Rut</label>
                            <input type="text" name="rut" class="form-control" placeholder="Rut">
                        </div>
                        <div class="form-group">
                            <label for="especialidad">Especialidad</label>
                            <input type="text" name="especialidad" class="form-control" placeholder="Especialidad">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                        </div>

                        <input type="submit" class="btn btn-primary btn-block mt-3" name="Registro" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
        <!--registro de doctore con 8 de espacio-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Rut</th>
                        <th>Especialidad</th>
                        <th>Telefono</th>

                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM registrodoctores";
                    $resultado = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td><?php echo $row['nombre_com']; ?></td>
                            <td><?php echo $row['rut']; ?></td>
                            <td><?php echo $row['especialidad']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td>
                                <a href="editDoctor.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminarDoctor.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
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


<?php include("includes/footer.php") ?>
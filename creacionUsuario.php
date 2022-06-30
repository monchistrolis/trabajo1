<?php include ("./database/db.php") ?>
<?php include ("includes/header.php") ?>

<div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5 ">
                    <div class="card">
                    <?php //cuadro de verificacion de guardado
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset(); } ?>
                        <div class="card-header">
                            <h3 class="text-center">Creacion de Usuario y Contraseña</h3>
                        </div>
                        <div class="card-body">
                            <form action="creacionUsuariodb.php" method="POST">
                                <div class="form-group">
                                    <label for="rut">Nombre Usuario</label>
                                    <input type="text" name="nom_usuario" class="form-control" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <input type="password" name="clave_usuario" class="form-control" placeholder="Contraseña">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block mt-3" name="creacion" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ("includes/footer.php") ?>

<?php include('./database/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8ce378095c.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <!--boostrap 5-->
</head>
<body>
<body>
    <nav class="navbar navbar-expand-sm bg-primary text-white">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="./home.php">Home</a>
                </li>
                <!--login-->
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
<!--creacion de login-->
    <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-4 mt-5 ">
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
                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="validacionLogin.php" method="POST">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Rut">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block mt-3" name="login" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include ('includes/footer.php'); ?>


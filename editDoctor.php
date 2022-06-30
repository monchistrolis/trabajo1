<?php

    include("./database/db.php");
    //agregar la coneccion con include(documento)
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM registrodoctores WHERE id = $id";
        $resultado= mysqli_query($conn, $query);
        if(mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $rut = $row['rut'];
            $especialidad = $row['especialidad'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $direccion = $row['direccion'];

        }
    }

    if (isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $rut = $_POST['rut'];
        $especialidad = $_POST['especialidad'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];

        $query = "UPDATE registrodoctores Set nombre = '$nombre', apellido = '$apellido', rut = '$rut', especialidad = '$especialidad', telefono = '$telefono', contraseña = '$contraseña'WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Registro actualizado correctamente';
        $_SESSION['message_type'] = 'warning';
        header('Location: registroDoctores.php');
    }
?>

<?php include ('includes/header.php')?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class=" card card-body">
                <form action="editDoctor.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <h3>Edicion de datos</h3>
                    <h5>recordar cambiar los campos deseados</h5>
                    <div class="form-group">
                        Nombre
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        Apellido
                        <input type="text" name="apellido" value="<?php echo $apellido; ?>" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        Rut
                        <input type="text" name="rut" value="<?php echo $rut; ?>" class="form-control" placeholder="Rut">
                    </div>
                    <div class="form-group">
                        Especialidad
                        <input type="text" name="especialidad" value="<?php echo $especialidad; ?>" class="form-control" placeholder="Especialidad">
                    </div>
                    <div class="form-group">
                        Telefono
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="Telefono">
                    </div>
                    <div>
                        contraseña
                        <input type="password" name="contraseña" value="<?php echo $contraseña; ?>" class="form-control" placeholder="contraseña">
                    </div>
                    <button class="btn btn-primary" name="actualizar">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
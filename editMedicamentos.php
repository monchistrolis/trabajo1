<?php

    include("./database/db.php");
    //agregar la coneccion con include(documento)
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM registromedicamentos WHERE id = $id";
        $resultado= mysqli_query($conn, $query);
        if(mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $tipoMedicamento = $row['tipoMedicamento'];
            $cantidad = $row['cantidad'];
            $proveedor = $row['proveedor'];
            $laboratorio = $row['laboratorio'];

        }
    }
    if (isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $tipoMedicamento = $_POST['tipoMedicamento'];
        $cantidad = $_POST['cantidad'];
        $proveedor = $_POST['proveedor'];
        $laboratorio = $_POST['laboratorio'];

        $query = "UPDATE registromedicamentos SET nombre = '$nombre', tipoMedicamento = '$tipoMedicamento', cantidad = '$cantidad', proveedor = '$proveedor', laboratorio = '$laboratorio' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Registro actualizado correctamente';
        $_SESSION['message_type'] = 'warning';
        header('Location: registroMedicamentos.php');
    }
?>

<?php include ('includes/header.php')?>
<div class="container p-4">
    <div class="row">
        <div class="col-md">
            <div class=" card card-body">
                <form action="editMedicamentos.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <h3 class="text-center">Actulizacion de medicamentos</h3>
                    
                    <div class="form-group">
                        Nombre
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        Tipo de Medicamento
                        <input type="text" name="tipoMedicamento" value="<?php echo $tipoMedicamento; ?>" class="form-control" placeholder="Tipo de Medicamento">
                    </div>
                    <div class="form-group">
                        Cantidad
                        <input type="text" name="cantidad" value="<?php echo $cantidad; ?>" class="form-control" placeholder="Cantidad">
                    </div>
                    <div class="form-group">
                        Proveedor
                        <input type="text" name="proveedor" value="<?php echo $proveedor; ?>" class="form-control" placeholder="Proveedor">
                    </div>
                    <div class="form-group">
                        Laboratorio
                        <input type="text" name="laboratorio" value="<?php echo $laboratorio; ?>" class="form-control" placeholder="Laboratorio">
                    </div>
                    <button class="btn btn-success" name="actualizar">
                        Actualizar
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include ('includes/footer.php')?>




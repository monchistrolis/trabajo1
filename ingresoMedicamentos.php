<?php

include("./database/db.php");

if (isset($_POST['Guardar'])) {
    $nombre = $_POST['nombre'];
    $tipoMedicamento = $_POST['tipoMedicamento'];
    $cantidad = $_POST['cantidad'];
    $proveedor = $_POST['proveedor'];
    $laboratorio = $_POST['laboratorio'];

    $query = "INSERT INTO registroMedicamentos (nombre, tipoMedicamento, cantidad, proveedor, laboratorio) VALUES ('$nombre', '$tipoMedicamento', '$cantidad', '$proveedor', '$laboratorio')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }
    $_SESSION['message'] = 'Registro Exitoso';
    $_SESSION['message_type'] = 'success';
    header('Location: creacionUsuario.php');
}
?>
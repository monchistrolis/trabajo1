<?php

include("./database/db.php");

if (isset($_POST['Registro'])) {
    $nombre = $_POST['nombre_com'];
    $rut = $_POST['rut'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
   

    $query = "INSERT INTO registrodoctores (nombre_com, rut, especialidad, telefono) VALUES ('$nombre', '$rut', '$especialidad', '$telefono')";
    $resultado= mysqli_query($conn, $query);
    if(!$resultado){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Registro de Doctor Exitoso';
    $_SESSION['message_type'] = 'success';
    header("Location: creacionUsuario.php");
}
?>

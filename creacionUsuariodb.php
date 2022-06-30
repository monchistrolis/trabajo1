<?php
include ("./database/db.php");

if (isset($_POST['creacion'])){
    $usuario = $_POST['nom_usuario'];
    $contraseña = $_POST['clave_usuario'];
    $query = "INSERT INTO usuario(nom_usuario, clave_usuario) VALUES ('$usuario', '$contraseña')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'Usuario Creado Exitosamente';
    $_SESSION['message_type'] = 'success';
    header("Location: creacionUsuario.php");

}
?>
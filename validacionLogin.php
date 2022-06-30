<?php
// validacion Login.php
include ("./database/db.php");

$nombreUsuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$query = "SELECT * FROM usuario WHERE nom_usuario = '$nombreUsuario' AND clave_usuario = '$contraseña'";
$resultado = mysqli_query($conn, $query);
$fila=mysqli_num_rows($resultado);

if ($fila > 0) {
    header("Location: portalDoctor.php");
} else {
    $_SESSION['message'] = 'Usuario o contraseña incorrectos';
    $_SESSION['message_type'] = 'danger';
    header("Location: login.php");
}
mysqli_free_result($resultado);
mysqli_close($conn);

?>



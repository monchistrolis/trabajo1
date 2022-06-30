<?php
    include("./database/db.php");
    //agregar la coneccion con include(documento)
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM registrodoctores WHERE id = $id";
        $query2 = "DELETE FROM usuario WHERE id = $id";
        $resultado= mysqli_query($conn, $query, $query2);
        if(!$resultado){
            die("Query Failed");
        }
        $_SESSION['message'] = 'Doctor Eliminado';
        $_SESSION['message_type'] = 'danger';
        header("Location: registroDoctores.php");
    }
?>
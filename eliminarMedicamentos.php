<?php
    include("./database/db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM registromedicamentos WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        if(!$resultado){
            die("Query Failed");
        }
        $_SESSION['message'] = 'Registro eliminado correctamente';
        $_SESSION['message_type'] = 'danger';
        header('Location: medicamentos.php');
    }
?>
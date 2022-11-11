<?php session_start();

    include "./conexion.php";

    $conexion = conexion();
    $idItem = $_POST['id'];
    $nombre = $_POST['imagen'];

    if ( unlink("../archivos/" . $nombre) ) {
    $sql = "DELETE FROM t_hardware WHERE id = '$idItem'";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        $_SESSION['mensaje'] = 'eliminar';
        header('location:../index.php');
    }else{
        echo "no se pudo eliminar";
    }
    }
?> 
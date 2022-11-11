<?php session_start(); //es una funcion que nos va a permitir utilzar seessiones y una session es una variable super global que no va a desaparecer a menos que el usuario la desaparezca
include "./conexion.php";
$conexion = conexion();

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$piezas = $_POST['piezas'];
$encargado = $_POST['encargado'];
$fecha = $_POST['fecha'];
$nombreArchivo = $_FILES['imagen']['name'];

$from = $_FILES['imagen']['tmp_name'];

$to = "../archivos/" . $nombreArchivo; 

    if( move_uploaded_file($from, $to)){

$sql = "INSERT INTO t_hardware (nombre,
                                categoria,
                                descrpcion,
                                piezas,
                                imagen,
                                encargado,
                                fecha) 
            VALUES('$nombre','$categoria','$descripcion','$piezas','$nombreArchivo','$encargado','$fecha')";
    //ejecutamos el sql
    $result = mysqli_query($conexion, $sql);
    if ($result) {
        $_SESSION['mensaje'] = 'insertar';
        header('location:../index.php');

    }else {
        echo "No se pudo ";
    }
    }
?>
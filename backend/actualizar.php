<?php session_start(); //es una funcion que nos va a permitir utilzar seessiones y una session es una variable super global que no va a desaparecer a menos que el usuario la desaparezca
include "./conexion.php";
$conexion = conexion();

$id = $_POST['id'];
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

$sql = "UPDATE t_hardware
SET nombre = '$nombre', categoria = '$categoria', descrpcion = '$descripcion', piezas = '$piezas', imagen = '$nombreArchivo', encargado = '$encargado', fecha = '$fecha'
WHERE id = '$id'";
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
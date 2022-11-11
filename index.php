<?php session_start();

    if (isset($_SESSION['mensaje'])) {
        $mensaje = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }

    include "./backend/conexion.php";
    $conexion = conexion();
    //esta es una formato de sql
    $sql = "SELECT * FROM t_hardware";
    //ejecutar el string con la conexion a base de datos
    $result = mysqli_query($conexion, $sql);


?>

    <?php include "./header.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Inventario Hardware</h1>
                    <?php include "./insertar.php"; ?>
                    <hr>
                    <?php include "./tabla.php"; ?>
                </div>
            </div>
        </div>
    <?php include "./footer.php"; ?>

    <script>

        let mensaje = '<?php echo $mensaje ?>';
        switch (mensaje) {
            case 'insertar':
                swal('Agregado :)','Se agrego Correctamente','success');
                break;
            case 'editar':
                swal('Editado','Se edito Correctamente','warning');
                break;
            case 'eliminar':
                swal('Eliminado','Se Elimino el Elemento Correctamente','error');
                break;
        }
    </script>
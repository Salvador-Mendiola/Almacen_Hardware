<?php 
    include "./backend/conexion.php";
    $conexion = conexion();
    $idItem = $_POST['id'];
    $sql = "SELECT * FROM t_hardware 
    Where id = '$idItem'";
    $result = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_array($result);
?>

<?php include "./header.php"; ?>
            <div class="container">
                <div class="row">
                        <div class="col">
                        <h2>Editar Objetos</h2>
                        <form action="./backend/actualizar.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id"
                        value="<?php echo $datos['id'];?>" hidden>

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" 
                        required class="form-control">

                        <label for="paterno">Categoria</label>
                        <select name="categoria" id="categoria" class="form-select">
                            <option value="Componentes">Componentes</option>
                            <option value="Gabinete">Gabinete</option>
                            <option value="Perifericos">Perifericos</option>
                            <option value="Mercancia">Mercancia</option>
                        </select>

                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" placeholder="Descripcion del Producto" required class="form-control">

                        <label for="piezas">Piezas</label>
                        <input type="number" name="piezas" placeholder="Selecciona el Numero de Piezas" required class="form-control">

                        <label for="imagen">Imagen</label>
                        <input type="file" name="imagen" placeholder="Selecciona tu imagen" required class="form-control">

                        <label for="encargado">Encargado</label>
                        <select name="encargado" id="encargado" class="form-select">
                                <option value="Juan">Juan</option>
                                <option value="Roldan">Roldan</option>
                                <option value="Salvador">Salvador</option>
                                <option value="Didier">Didier</option>
                        </select>

                <label for="paterno">Fecha</label>
                <input type="date" name="fecha" placeholder="Fecha en que se agrega" required class="form-control">
                        <br>
                        <button class="btn btn-warning"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
                        <a href="./index.php" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                        </form>
                        </div>
                </div>
            </div>
            <?php include "./footer.php"; ?>
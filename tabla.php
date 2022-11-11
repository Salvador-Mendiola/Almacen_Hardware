<table class="table table-hover table-bordered" id="tablacrud">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Piezas</th>
            <th>Imagen</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php while($ver = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $ver['id']; ?></td>
                <td><?php echo $ver['nombre']; ?></td>
                <td><?php echo $ver['categoria']; ?></td>
                <td><?php echo $ver['descrpcion']; ?></td>
                <td><?php echo $ver['piezas']; ?></td>
                <td><img src="<?php echo "./archivos/" . $ver['imagen']; ?>" width="100px" height="100px"></td>
                <td><?php echo $ver['encargado']; ?></td>
                <td><?php echo $ver['fecha']; ?></td>
                <td>

                    <form action="./editar.php" method="POST">
                        <input type="text" name="id"
                        value="<?php echo $ver['id']; ?>" hidden>
                        
                        <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i> Editar</button>
                    </form>    
                </td>
                <td>
                    <form action="./backend/eliminar.php" method="POST">
                        <input type="text" name="id" value="<?php echo $ver['id']; ?>" hidden>
                        <input type="text" name="imagen" value="<?php echo $ver['imagen']; ?>" hidden>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa-solid fa-folder-plus"></i> Insertar Nuevo Objeto
</button>

<!-- Modal -->
<form action="./backend/Insertar.php" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" required class="form-control">

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
                

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary">Insertar</button>
      </div>
    </div>
  </div>
</div>
</form>
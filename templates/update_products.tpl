<section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2>Editar producto</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">   
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID</span>
          <input type="number" class="form-control" placeholder="ID del producto" aria-label="id" name="id" id="id" aria-describedby="basic-addon1">
          </div>
        {$messageError.id}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID_Categoria</span>
          <input type="number" class="form-control" placeholder="ID de la categoria" aria-label="id_categoria" name="id_categoria" id="id_categoria" aria-describedby="basic-addon1">
          </div>
        {$messageError.id_categoria}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" class="form-control" placeholder="Nombre del producto" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1">
        </div>
        {$messageError.nombre}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Precio</span>
          <input type="text" class="form-control" placeholder="precio" aria-label="precio" name="precio" id="precio" aria-describedby="basic-addon1">
        </div>
        {$messageError.precio}  
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Stock</span>
          <input type="text" class="form-control" placeholder="stock" aria-label="stock" name="stock" id="stock" aria-describedby="basic-addon1">
        </div>
        {$messageError.stock}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">URL</span>
          <input type="text" class="form-control" placeholder="imagen del producto" aria-label="url" name="url" id="url" aria-describedby="basic-addon1">
        </div>
        {$messageError.url}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Detalle</span>
          <input type="text" class="form-control" placeholder="detalle" aria-label="detalle" name="detalle" id="detalle" aria-describedby="basic-addon1">
        </div>
        {$messageError.detalle}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Recomendado</span>
          <input type="text" class="form-control" placeholder="0 o 1" aria-label="recomendado" name="recomendado" id="recomendado" aria-describedby="basic-addon1">
        </div>
        {$messageError.recomendado}
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Modificar</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver a login</a></button>
        </div>

      </form>
    </section>
  </div>
</section>
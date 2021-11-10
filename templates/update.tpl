<section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2>Modificar usuario: {$usuarioLoged}</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">   
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Usuario</span>
          <input type="text" class="form-control" placeholder="usuario" aria-label="usuario" name="usuario" id="usuario" aria-describedby="basic-addon1" value="{$usuarioValue}">
          </div>
        {$messageError.usuario}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1" value="{$nombreValue}">
        </div>
        {$messageError.nombre} 
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Apellido</span>
          <input type="text" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido" id="apellido" aria-describedby="basic-addon1" value="{$apellidoValue}">
        </div>
        {$messageError.apellido}  
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Password</span>
          <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1">
        </div>
        {$messageError.password}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
          <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1">
        </div>
        {$messageError.rPassword}
        {$messageError.passwordDistinct}
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Modificar</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver a login</a></button>
        </div>
      </form>
    </section>
  </div>
</section>
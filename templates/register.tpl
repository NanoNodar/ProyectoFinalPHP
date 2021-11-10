<section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2 style="color: #000;">Registración</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Usuario</span>
          <input type="text" class="form-control" placeholder="usuario" aria-label="usuario" name="usuario" id="usuario" aria-describedby="basic-addon1" value="{$usuario}">
        </div>
        {$messageError.usuario}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1" value="{$nombre}">
        </div>
        {$messageError.nombre}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Apellido</span>
          <input type="text" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido" id="apellido" aria-describedby="basic-addon1" value="{$apellido}">
        </div>
        {$messageError.apellido}
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Dni</span>
          <input type="text" class="form-control" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" value="{$dni}">
        </div>
        {$messageError.dni}
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
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Captcha</span>
          <input type="text" class="form-control" placeholder="Captcha" aria-label="captcha" name="captcha" id="captcha" aria-describedby="basic-addon1">
        </div>
        {$messageError.captcha}
        {$captcha_fail}
        <div class="imagen_captcha">
                  {$imagen}
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Registrarse</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver a login</a></button>
        </div>

      </form>
    </section>
  </div>
</section>

<div class="content">
    <div class="bg-light p-4 rounded">
        <div class="row justify-content-center align-items-center">
            <form id="formulario" method="POST">             
                <div class="mb-3">
                    <label for="formGroupExampleInput2">Nombre</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" value="{$usuario}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{$password}">
                </div>
                <div class="container_checkbox"> <input type="checkbox" name="recordar" {$checked}>Recordar contraseña</div>
                {$messageError}
                <div class="col-auto">
                    <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>
                    <button type="button" class="btn btn-outline-success">
                    <a href="index.php?action=register">Registrarse</a></button>
                </div>
            </form>
        </div>
    </div>
</div>

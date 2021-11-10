<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:51:22
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618ba42a8dc5c4_61124194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53d154fb70c5291bcf062e93112fab6510b98ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\register.tpl',
      1 => 1636541480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ba42a8dc5c4_61124194 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2 style="color: #000;">Registración</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Usuario</span>
          <input type="text" class="form-control" placeholder="usuario" aria-label="usuario" name="usuario" id="usuario" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['usuario'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Apellido</span>
          <input type="text" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido" id="apellido" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['apellido'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Dni</span>
          <input type="text" class="form-control" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['dni'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Password</span>
          <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['password'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
          <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['rPassword'];?>

        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['passwordDistinct'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Captcha</span>
          <input type="text" class="form-control" placeholder="Captcha" aria-label="captcha" name="captcha" id="captcha" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['captcha'];?>

        <?php echo $_smarty_tpl->tpl_vars['captcha_fail']->value;?>

        <div class="imagen_captcha">
                  <?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>

        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Registrarse</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver a login</a></button>
        </div>

      </form>
    </section>
  </div>
</section>
<?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-09 14:13:45
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618a740933d807_14398302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a4c47b2e9c9d6fec8cc083ad51152c1342cec52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\login.tpl',
      1 => 1636463481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618a740933d807_14398302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content">
    <div class="bg-light p-4 rounded">
        <div class="row justify-content-center align-items-center">
            <form id="formulario" method="POST">             
                <div class="mb-3">
                    <label for="formGroupExampleInput2">Nombre</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
">
                </div>
                <div class="container_checkbox"> <input type="checkbox" name="recordar" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>Recordar contraseña</div>
                <?php echo $_smarty_tpl->tpl_vars['messageError']->value;?>

                <div class="col-auto">
                    <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>
                    <button type="button" class="btn btn-outline-success">
                    <a href="index.php?action=register">Registrarse</a></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}

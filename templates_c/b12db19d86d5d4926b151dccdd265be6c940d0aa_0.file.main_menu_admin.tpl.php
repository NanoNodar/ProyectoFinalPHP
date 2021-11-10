<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:32:41
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\main_menu_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618b9fc9a85c92_37114770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b12db19d86d5d4926b151dccdd265be6c940d0aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\main_menu_admin.tpl',
      1 => 1636539892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618b9fc9a85c92_37114770 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header" class="row sticky-top">
    <nav class="navbar navbar-dark bg-dark ">
        <a class="navbar-brand ps-0" href="index.php">Inicio</a>
        <div class="justify-content-end">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                <?php echo $_smarty_tpl->tpl_vars['usuarioLoged']->value;?>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?admin=update">Modificar Usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=borrarUsuario">Borrar tu usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=DisabledEnabledUser">Deshabilitar/Habilitar un usuario</a></li>
                <li><a class="dropdown-item" href="index.php?admin=Users">Lista de usuarios</a></li>
                <li><a class="dropdown-item" href="index.php?admin=Products">Lista de productos</a></li>
                <li><a class="dropdown-item" href="index.php?admin=InsertProduct">Agregar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?admin=DeleteProduct">Eliminar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?admin=EditProduct">Editar un producto</a></li>
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>
            </ul>
        </div>
    </nav>
</header><?php }
}

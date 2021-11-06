<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-06 02:29:46
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6185da8a7a1c44_69026888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ac11e64c8181390b29680b64798def6867a8c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\main_menu.tpl',
      1 => 1636162179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6185da8a7a1c44_69026888 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
                <div class="menuSep"></div>
                <div class="menuPerfil">
                    <div id="nameAndLastName"></div>
                    <a href="index.php">Inicio</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="imgIco" src="img/ico/user-04.png">
                                <?php echo $_smarty_tpl->tpl_vars['usuarioLoged']->value;?>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?connected=update">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.php?connected=borrarUsuario">Borrar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
                            </ul>
                        </div>
                    
                </div>
            </header><?php }
}

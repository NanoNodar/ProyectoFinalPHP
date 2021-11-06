<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-31 20:00:11
  from 'C:\xampp\htdocs\UTN_PHPAvanzado_03_2021\Clase 8-Basecomercio-Hacer Tp Final\templates\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617ee7bb6c3cf4_57332898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169556837810c96df309c01722d17b2a1ecb0ad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UTN_PHPAvanzado_03_2021\\Clase 8-Basecomercio-Hacer Tp Final\\templates\\main_menu.tpl',
      1 => 1635436346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617ee7bb6c3cf4_57332898 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
                <div class="menuSep"></div>
                <div class="menuPerfil">
                    <div id="nameAndLastName"></div>
                    
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="imgIco" src="img/ico/user-04.png">
                                <?php echo $_smarty_tpl->tpl_vars['usuarioLoged']->value;?>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>
                                <li><a class="dropdown-item" href="#">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" href="#">Borrar Usuario</a></li>
                                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
                            </ul>
                        </div>
                    
                </div>
            </header><?php }
}

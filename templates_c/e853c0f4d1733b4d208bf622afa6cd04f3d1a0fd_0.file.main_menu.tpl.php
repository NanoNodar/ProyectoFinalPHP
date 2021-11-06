<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-21 00:25:43
  from 'D:\www\UTN_PHPAvanzado_03_2021\Clase 8-Basecomercio-02\templates\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617097675989e1_41927278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e853c0f4d1733b4d208bf622afa6cd04f3d1a0fd' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_03_2021\\Clase 8-Basecomercio-02\\templates\\main_menu.tpl',
      1 => 1634768739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617097675989e1_41927278 (Smarty_Internal_Template $_smarty_tpl) {
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

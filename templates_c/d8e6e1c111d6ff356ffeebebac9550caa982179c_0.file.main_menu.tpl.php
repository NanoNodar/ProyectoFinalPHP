<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-16 01:29:10
  from 'D:\www\UTN_PHPAvanzado_03_2021\Basecomercio\templates\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_616a0ec65f6533_80573413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e6e1c111d6ff356ffeebebac9550caa982179c' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_03_2021\\Basecomercio\\templates\\main_menu.tpl',
      1 => 1634340344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616a0ec65f6533_80573413 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="border-bottom" id="mainMenu">
                <div class="menuSep"></div>
                <div class="menuPerfil">
                    <div id="nameAndLastName"></div>
                    
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="imgIco" src="img/ico/user-04.png">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                               <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                                <li><a class="dropdown-item" href="#">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" href="#">Borrar Usuario</a></li>
                                <li><a class="dropdown-item" href="#">Salir</a></li>                                
                            </ul>
                        </div>
                    
                </div>
            </header><?php }
}

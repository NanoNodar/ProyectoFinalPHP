<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-16 02:00:44
  from 'D:\www\UTN_PHPAvanzado_03_2021\Basecomercio-02\templates\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_616a162c7b75a7_00343943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8feffbfc0ea6d1f4d2999980cee741b83033322' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_03_2021\\Basecomercio-02\\templates\\main_menu.tpl',
      1 => 1634340344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616a162c7b75a7_00343943 (Smarty_Internal_Template $_smarty_tpl) {
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

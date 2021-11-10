<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:45:41
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\borrarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618ba2d548f2d0_18756982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8e61ff47683f805fb7aaad9a2fb6b36cef233e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\borrarUsuario.tpl',
      1 => 1636541140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ba2d548f2d0_18756982 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
<div class="bg-light p-4 rounded text-center" style="background-color: #666!important;">
    <p>Estas seguro que queres borrar tu usuario?</p>
    <button class="button btn btn-danger"><a href="index.php?action=delete">Si</a></button>
    <button class="btn btn-success"><a href="index.php">No</a></button>
</div>
</section><?php }
}

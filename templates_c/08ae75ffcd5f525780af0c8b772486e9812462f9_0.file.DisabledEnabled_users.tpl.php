<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:48:38
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\DisabledEnabled_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618ba38694c213_15616459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08ae75ffcd5f525780af0c8b772486e9812462f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\DisabledEnabled_users.tpl',
      1 => 1636541316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ba38694c213_15616459 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2>Deshabilitar/Habilitar Usuario:</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID</span>
          <input type="text" class="form-control" placeholder="id" aria-label="id" name="id" id="nombre" aria-describedby="basic-addon1">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Deshabilitar/Habilitar</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver</a></button>
        </div>
      </form>
    </section>
  </div>
</section><?php }
}

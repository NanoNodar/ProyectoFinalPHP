<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:47:54
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\delete_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618ba35a9e4e93_24730658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec43e910963afe46dd464820e4a0f9b1636379f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\delete_products.tpl',
      1 => 1636541272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ba35a9e4e93_24730658 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2>Eliminar producto:</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID</span>
          <input type="text" class="form-control" placeholder="id" aria-label="id" name="id" id="nombre" aria-describedby="basic-addon1">
        </div>
        
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver</a></button>
        </div>

      </form>
    </section>
  </div>
</section>
<?php }
}

<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 10:52:24
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\update_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618b96581e9ac6_45954200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd629fa33f1e515c87178e986c8c085ae1097e4f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\update_products.tpl',
      1 => 1636463805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618b96581e9ac6_45954200 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
  <div class="bg-light p-4 rounded" id="idDivForm">
      <h2>Editar producto</h2>
    <section class="mainContent">
      <form id="formulario" name="formulario" class="row g-3" method="POST">   
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID</span>
          <input type="number" class="form-control" placeholder="ID del producto" aria-label="id" name="id" id="id" aria-describedby="basic-addon1">
          </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['id'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">ID_Categoria</span>
          <input type="number" class="form-control" placeholder="ID de la categoria" aria-label="id_categoria" name="id_categoria" id="id_categoria" aria-describedby="basic-addon1">
          </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['id_categoria'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input type="text" class="form-control" placeholder="Nombre del producto" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Precio</span>
          <input type="text" class="form-control" placeholder="precio" aria-label="precio" name="precio" id="precio" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['precio'];?>
  
        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Stock</span>
          <input type="text" class="form-control" placeholder="stock" aria-label="stock" name="stock" id="stock" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['stock'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">URL</span>
          <input type="text" class="form-control" placeholder="imagen del producto" aria-label="url" name="url" id="url" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['url'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Detalle</span>
          <input type="text" class="form-control" placeholder="detalle" aria-label="detalle" name="detalle" id="detalle" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['detalle'];?>

        <div class="input-group mb-1">
          <span class="input-group-text" id="basic-addon1">Recomendado</span>
          <input type="text" class="form-control" placeholder="0 o 1" aria-label="recomendado" name="recomendado" id="recomendado" aria-describedby="basic-addon1">
        </div>
        <?php echo $_smarty_tpl->tpl_vars['messageError']->value['recomendado'];?>

        <div class="col-auto">
          <button type="submit" class="btn btn-outline-success">Modificar</button>
          <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver a login</a></button>
        </div>

      </form>
    </section>
  </div>
</section><?php }
}

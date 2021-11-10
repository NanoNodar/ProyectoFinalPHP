<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-10 11:48:15
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\insert_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618ba36fc25702_10418211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62db028d097b1b07c313057380098c2ab60117cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\insert_productos.tpl',
      1 => 1636541292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ba36fc25702_10418211 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <section class="content">

    <div class="bg-light p-4 rounded" id="idDivForm">
    
        <h2>Ingresar producto</h2>
      <section class="mainContent">
        <form id="formulario" name="formulario" class="row g-3" method="POST">
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Categoria</span>
            <input type="text" class="form-control" placeholder="id_categoria" aria-label="id_categoria" name="id_categoria" id="id_categoria" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['id_categoria'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Precio</span>
            <input type="text" class="form-control" placeholder="precio" aria-label="precio" name="precio" id="precio" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['precio'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Stock</span>
            <input type="text" class="form-control" placeholder="stock" aria-label="stock" name="stock" id="stock" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['stock'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">URL</span>
            <input type="text" class="form-control" placeholder="url" aria-label="url" name="url" id="url"   aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['url'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Detalle</span>
            <input type="text" class="form-control" placeholder="detalle" aria-label="detalle" name="detalle" id="detalle"   aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['detalle']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['detalle'];?>

          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Recomendado</span>
            <input type="text" class="form-control" placeholder="recomendado" aria-label="recomendado" name="recomendado" id="recomendado" aria-describedby="basic-addon1">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success">Ingresar producto</button>
            <button type="button" class="btn btn-outline-primary"><a href="index.php">Volver</a></button>
          </div>

        </form>
      </section>
    </div>
  </section><?php }
}

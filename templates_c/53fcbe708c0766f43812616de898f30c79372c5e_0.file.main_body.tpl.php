<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-04 13:48:28
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\main_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_6183d69c39fde1_15120189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53fcbe708c0766f43812616de898f30c79372c5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\main_body.tpl',
      1 => 1636030106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6183d69c39fde1_15120189 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="mainPanel">
    <?php echo $_smarty_tpl->tpl_vars['headerMessage']->value;?>

    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <div style="padding: 5px; border: solid 2px #000; margin: 5px; text-align: center;">
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
</span>
                <span><img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>
"></span>
                <a>Ver detalle</a>
            </div>
         
        <?php
}
if ($_smarty_tpl->tpl_vars['r']->do_else) {
?>
            ------Sin datos----------------
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}

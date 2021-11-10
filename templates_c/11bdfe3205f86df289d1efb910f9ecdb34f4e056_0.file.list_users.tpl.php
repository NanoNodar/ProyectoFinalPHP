<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-08 13:01:42
  from 'C:\xampp\htdocs\PROYECTO FINAL PHP AVANZADO\templates\list_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_618911a69e1c60_75040707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11bdfe3205f86df289d1efb910f9ecdb34f4e056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTO FINAL PHP AVANZADO\\templates\\list_users.tpl',
      1 => 1636372872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618911a69e1c60_75040707 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="mainPanel">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
            <div style="padding: 5px; border: solid 2px #000; margin: 5px; text-align: center;">
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['apellido'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['dni'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['condicion'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['fechaIng'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['r']->value['activo'];?>
</span>
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

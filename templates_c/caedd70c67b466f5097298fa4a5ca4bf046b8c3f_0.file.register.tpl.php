<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-31 20:00:21
  from 'C:\xampp\htdocs\UTN_PHPAvanzado_03_2021\Clase 8-Basecomercio-Hacer Tp Final\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617ee7c574f195_37630971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caedd70c67b466f5097298fa4a5ca4bf046b8c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UTN_PHPAvanzado_03_2021\\Clase 8-Basecomercio-Hacer Tp Final\\templates\\register.tpl',
      1 => 1635436346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617ee7c574f195_37630971 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">        
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="css/register.css">   
  <?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>

  
  <title>Registracion</title>
</head>

<body>

  <section class="content">

    <div class="bg-light p-4 rounded" id="idDivForm">
      <header class="shadow-sm p-3 mb-3 bg-white rounded" id="mainMenu">
        <h2>Registración</h2>
      </header>
      <section class="mainContent">
        <form id="formulario" name="formulario" class="row g-3" method="POST"> 
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['usuario'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Ususario</span>
            <input type="text" class="form-control" placeholder="usuario" aria-label="usuario" name="usuario" id="usuario" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
">
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['nombre'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" name="nombre" id="nombre" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
          </div>

          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['apellido'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Apellido</span>
            <input type="text" class="form-control" placeholder="apellido" aria-label="apellido" name="apellido" id="apellido" aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
">
          </div>

         <?php echo $_smarty_tpl->tpl_vars['messageError']->value['dni'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Dni</span>
            <input type="text" class="form-control" placeholder="dni" aria-label="dni" name="dni" id="dni"   aria-describedby="basic-addon1" value="<?php echo $_smarty_tpl->tpl_vars['dni']->value;?>
">
          </div>

          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['condicion'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Condición</span>

            <select class="form-control" name="condicion" id="condicion" aria-describedby="basic-addon1">
              <option value="Profesor">Profesor</option>
              <option value="Alumno">Alumno</option>
            </select>
          </div>
          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['passwordDistinct'];?>
   

          <?php echo $_smarty_tpl->tpl_vars['messageError']->value['password'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1">
          </div>

         <?php echo $_smarty_tpl->tpl_vars['messageError']->value['rPassword'];?>
   
          <div class="input-group mb-1">
            <span class="input-group-text" id="basic-addon1">Reingrese Password</span>
            <input type="password" class="form-control" placeholder="Reingrese Password" aria-label="rPassword" name="rPassword" id="rPassword" aria-describedby="basic-addon1">
          </div>

          <div class="col-auto">
            <button type="submit" class="btn btn-outline-success">Registrarme</button>
            <button type="button" class="btn btn-outline-primary"><a href="index.php">Cancelar</a></button>
          </div>

        </form>
      </section>
    </div>
  </section>
  <?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
>

</body><?php }
}

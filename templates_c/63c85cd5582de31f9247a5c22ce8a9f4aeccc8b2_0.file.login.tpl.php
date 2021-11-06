<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-31 20:00:36
  from 'C:\xampp\htdocs\UTN_PHPAvanzado_03_2021\Clase 8-Basecomercio-Hacer Tp Final\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617ee7d46f8ea3_28119497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63c85cd5582de31f9247a5c22ce8a9f4aeccc8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UTN_PHPAvanzado_03_2021\\Clase 8-Basecomercio-Hacer Tp Final\\templates\\login.tpl',
      1 => 1635436346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617ee7d46f8ea3_28119497 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="css/styles.css">   
    
    <title>Login</title>
</head>

<body>


    <div class="content">
        <div class="bg-light p-4 rounded">
            <div class="row justify-content-center align-items-center">
                    

                    <form id="formulario" method="POST">

                                           
                        <div class="mb-3">
                            <label for="formGroupExampleInput2">Nombre</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
                        </div>
                       
                        <div class="mb-3">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    
                        <div class="col-auto">
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>
                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.html">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>


</body>

</html><?php }
}

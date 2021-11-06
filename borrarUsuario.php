<?php


$resultSQL=$db->users->deleteById($idUsuario);
session_destroy();
$Smarty->assign('usuarioLoged',"");
session_start();

header("Location:index.php");

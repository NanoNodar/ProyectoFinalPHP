<?php
session_start();

include("inc/include.inc.php");
include("Smarty/libs/Smarty.class.php");


$titulo="Smarty (Base Comercio)";

$db=new Mysql_inc();

$Smarty = new Smarty();


$Smarty->assign('titulo',$titulo);
$Smarty->assign('headerMessage',"");
$Smarty->assign('usuarioLoged',$_SESSION['usuario']);
$idUsuario = $_SESSION['id'];


if (isset($_GET["action"])){
    if($_GET["action"]=="register"){
        include("register.php");
    }else if($_GET["action"]=="salir"){
        session_destroy();
        $Smarty->assign('usuarioLoged',"");
        session_start();
        header("Location:index.php");
    }else if($_GET["action"]=="delete"){
        $resultSQL=$db->users->deleteById($idUsuario);
        session_destroy();
        $Smarty->assign('usuarioLoged',"");
        session_start();
        header("Location:index.php");
    }
}
if($_SESSION["access"] == false){
    include("login.php");
    echo $_SESSION["usuario"];
}
if($_SESSION["access"] == true){
    if(isset($_GET["connected"])){
        if($_GET["connected"]=="update"){

            $Smarty->display("main_header.tpl");
            $Smarty->display("main_menu.tpl");
            include("update.php");
            
            
        }elseif($_GET["connected"]=="borrarUsuario"){
            $Smarty->display("main_header.tpl");
            $Smarty->display("main_menu.tpl");
            $Smarty->display("borrarUsuario.tpl");
            echo $idUsuario;
        }
    }else{
        
        $Smarty->display("main_header.tpl");
        $Smarty->display("main_menu.tpl");
        $Smarty->display("main_left_menu.tpl");
        include("main_body.php");
        $Smarty->display("main_footer.tpl");
        echo $_SESSION["usuario"];
    }
    
}

//

//echo $_SESSION["usuario"];
/*
$Smarty->display("main.tpl");
*/

<?php

    session_start();

    include("inc/include.inc.php");
    include("Smarty/libs/Smarty.class.php");


    $titulo="Proyecto Asin Nodar";

    $db = new Mysql_inc();

    $Smarty = new Smarty();

    $Smarty->assign('titulo',$titulo);
    $Smarty->assign('headerMessage',"");
    $Smarty->assign('usuarioLoged',$_SESSION['usuario']);
    $idUsuario = $_SESSION['id'];
    $Smarty->display("head.tpl");

    if(isset($_SESSION['id']) ) {  
        if((time() - $_SESSION['time']) > 600){
            header('Location:index.php?action=salir');
        }
    }

    switch ($_GET["action"]){

        case "register":
            include("register.php");
            break;

        case "salir":
            session_destroy();
            session_start();
            header("Location:index.php");
            break;

        default:
            break;
    }

    switch ($_SESSION["condicion"]) {
        
        case "cliente":
            switch($_GET["connected"]){

                case "update":
                    $Smarty->display("main_menu.tpl");
                    include("update.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "borrarUsuario":
                    $Smarty->display("main_menu.tpl");
                    $Smarty->display("borrarUsuario.tpl");
                    $Smarty->display("footer.tpl");
                    break;

                default:
                    $Smarty->display("main_menu.tpl");
                    $Smarty->display("main_left_menu.tpl");
                    include("main_body.php");
                    $Smarty->display("footer.tpl");
                    break;
            }
            break;

        case 'admin':
            switch($_GET["admin"]){

                case "update":
                    $Smarty->display("main_menu_admin.tpl");
                    include("update.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "borrarUsuario":
                    $Smarty->display("main_menu_admin.tpl");
                    $Smarty->display("borrarUsuario.tpl");
                    $Smarty->display("footer.tpl");
                    break;

                case "DisabledEnabledUser":
                    $Smarty->display("main_menu_admin.tpl");
                    include("DisabledEnabled_users.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "InsertProduct":
                    $Smarty->display("main_menu_admin.tpl");
                    include("insert_products.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "DeleteProduct":
                    $Smarty->display("main_menu_admin.tpl");
                    include("delete_products.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "EditProduct":
                    $Smarty->display("main_menu_admin.tpl");
                    include("update_productos.php");
                    $Smarty->display("footer.tpl");
                    break;

                case "Products":
                    $Smarty->display("main_menu_admin.tpl");
                    showResult($result=$db->articulos->getAll());
                    $Smarty->display("footer.tpl");
                    break;

                case "Users":
                    $Smarty->display("main_menu_admin.tpl");
                    showResult($result=$db->users->getAll());
                    $Smarty->display("footer.tpl");
                    break;

                default:
                    $Smarty->display("main_menu_admin.tpl");
                    $Smarty->display("main_left_menu.tpl");
                    include("main_body.php");
                    $Smarty->display("footer.tpl");
                    break;
            }
            break;

        default:

            if(!$_GET["action"]){
                include("login.php");
            }
        
            break;
    }
    $Smarty->display("footer.tpl");

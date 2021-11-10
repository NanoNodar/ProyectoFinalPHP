<?php

    switch ($_GET["tag"]) {
        case '1':
            $result=$db->categorias->getById(1);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        case '2':
            $result=$db->categorias->getById(2);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        case '3':
            $result=$db->categorias->getById(3);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        case '4':
            $result=$db->categorias->getById(4);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        case '5':
            $result=$db->categorias->getById(5);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        case '6':
            $result=$db->categorias->getById(6);
            $Smarty->assign('res',$result);
            $Smarty->display("main_body.tpl");
            break;
        default:
            $result=$db->articulos->getRecomended(1);
            $Smarty->assign('res',$result);
            // $Smarty->assign('id',$id);
            $Smarty->display("main_body.tpl");
            break;
    }

?>
<?php

// $smarty->debugging=true;
if(isset($_GET["tag"])){
    if($_GET["tag"]=="1"){
        $result=$db->categorias->getById(1);
        $Smarty->assign('res',$result);
        $Smarty->display("main_body.tpl");
    }elseif($_GET["tag"]=="2"){
        $result=$db->categorias->getById(2);
        $Smarty->assign('res',$result);
        $Smarty->display("main_body.tpl");
    }elseif($_GET["tag"]=="3"){
        $result=$db->categorias->getById(3);
        $Smarty->assign('res',$result);
        $Smarty->display("main_body.tpl");
    }elseif($_GET["tag"]=="4"){
        $result=$db->categorias->getById(4);
        $Smarty->assign('res',$result);
        $Smarty->display("main_body.tpl");
    }elseif($_GET["tag"]=="5"){
        $result=$db->categorias->getById(5);
        $Smarty->assign('res',$result);
        $Smarty->display("main_body.tpl");
    }
}else{
    $result=$db->articulos->getAll();
    $id=$db->articulos->getById(1);
    $Smarty->assign('res',$result);
    $Smarty->assign('id',$id);

    $Smarty->display("main_body.tpl");
}


?>
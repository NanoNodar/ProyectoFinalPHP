<?php

    $messages="";

    $usuario="";
    $nombre="";
    $apellido="";
    $password="";
    $rPassword="";
    $message="";


    $messages=[];
    $messages["id"]="";
    $messages["id_categoria"]="";
    $messages["nombre"]="";
    $messages["precio"]="";
    $messages["stock"]="";
    $messages["url"]="";
    $messages["detalle"]="";
    $messages["recomendado"]="";

    $allOk=false;


    $Smarty->assign('messageError',"");

    if(isset($_POST["id"])){
        $allOk=true;

        $result=verifyParams("id"); 
        $result["valid"] ? $id=$result["value"]:$messages["id"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("id_categoria"); 
        $result["valid"] ? $id_categoria=$result["value"]:$messages["id_categoria"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("nombre"); 
        $result["valid"] ? $nombre=$result["value"]:$messages["nombre"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("precio"); 
        $result["valid"] ? $precio=$result["value"]:$messages["precio"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("stock");
        $result["valid"] ? $stock=$result["value"]:$messages["stock"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("url");
        $result["valid"] ? $url=$result["value"]:$messages["url"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("detalle");
        $result["valid"] ? $detalle=$result["value"]:$messages["detalle"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("recomendado");
        $result["valid"] ? $recomendado=$result["value"]:$messages["recomendado"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

    }

    if ($allOk){
        $resultSQL=$db->articulos->updateById($id,$id_categoria,$nombre,$precio,$stock,$url,$detalle,$recomendado);  
        header("Location:index.php");  
    }else{
        $Smarty->assign('messageError',$messages);
        $Smarty->display("update_products.tpl");
        
    }
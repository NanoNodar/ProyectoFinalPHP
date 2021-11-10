<?php

    $data=$db->users->getById($idUsuario);

    $messages="";

    $Smarty->assign('usuarioValue',$data["usuario"]);
    $Smarty->assign('nombreValue',$data["nombre"]);
    $Smarty->assign('apellidoValue',$data["apellido"]);

    $usuario="";
    $nombre="";
    $apellido="";
    $password="";
    $rPassword="";
    $message="";


    $messages=[];
    $messages["usuario"]="";
    $messages["nombre"]="";
    $messages["apellido"]="";
    $messages["password"]="";
    $messages["rPassword"]="";
    $messages["passwordDistinct"]="";

    $allOk=false;


    $Smarty->assign('messageError',"");

    if(isset($_POST["usuario"])){
        $allOk=true;

        $result=verifyParams("usuario"); 
        $result["valid"] ? $usuario=$result["value"]:$messages["usuario"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("nombre"); 
        $result["valid"] ? $nombre=$result["value"]:$messages["nombre"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("apellido"); 
        $result["valid"] ? $apellido=$result["value"]:$messages["apellido"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("password");
        $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("rPassword");
        $result["valid"] ? $rPassword=$result["value"]:$messages["rPassword"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        if($password!=$rPassword) {
            $allOk=false;
            $messages["passwordDistinct"]=cartelError("Las contrase&ntilde;as no coinciden");
        }
    }

    if ($allOk){
        $resultSQL=$db->users->updateById($idUsuario,$usuario,$nombre,$apellido,$password);
        header("Location:index.php");
        
    }else{
        $Smarty->assign('messageError',$messages);
        $Smarty->display("update.tpl");
        
    }
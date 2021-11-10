<?php

    $messages="";


    $usuario="";
    $nombre="";
    $apellido="";
    $dni="";
    $condicion="";
    $password="";
    $rPassword="";
    $message="";


    $messages=[];
    $messages["usuario"]="";
    $messages["nombre"]="";
    $messages["apellido"]="";
    $messages["dni"]="";
    $messages["condicion"]="";
    $messages["password"]="";
    $messages["rPassword"]="";
    $messages["passwordDistinct"]="";
    $messages["captcha"]="";


    $allOk=false;

    $imagen = "<img src='captcha.php'/>";

    $Smarty->assign('messageError',"");
    $Smarty->assign('imagen',$imagen);


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
        
        $result=verifyParams("dni");
        $result["valid"] ? $dni=$result["value"]:$messages["dni"]=cartelError($result["value"]);
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

        $result=verifyParams("captcha");
        $result["valid"] ? $captcha=$result["value"]:$messages["captcha"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;
    }

    $confirmacion = $_POST['captcha'];

    $Smarty->assign('usuario',$usuario);
    $Smarty->assign('nombre',$nombre);
    $Smarty->assign('apellido',$apellido);
    $Smarty->assign('dni',$dni);

    if(strtoupper($_REQUEST["captcha"]) == $_SESSION["captcha"]){
        if ($allOk){
            $resultSQL=$db->users->insert($usuario,$nombre,$apellido,$dni,$password);    
            $Smarty->assign('headerMessage',cartelHide("Registro de nuevo usuario completo"));
            header("Location:index.php");
            
        }else{
            $Smarty->assign('messageError',$messages);
            $Smarty->display("register.tpl");
            
        }
    }else{
        $Smarty->assign('messageError',$messages);
        $Smarty->assign('captcha_fail',$captcha_fail);
        $Smarty->display("register.tpl");
    }

?>
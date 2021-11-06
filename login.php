<?php

$usuario="";
$password="";

$messages["usuario"]="";
$messages["password"]="";

$allOk=false;
$Smarty->assign('messageError',"");

if(isset($_POST["usuario"])){
    $allOk=true;

    $result=verifyParams("usuario"); 
    $result["valid"] ? $usuario=$result["value"]:$messages["usuario"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;

    $result=verifyParams("password");
    $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;    
}

if ($allOk){
    $resultSQL=$db->users->login($usuario,$password);   

    if ($db->db->numRows()>0){
        // echo "correcto logeado";
        $_SESSION["id"]=$resultSQL["id"];
        $_SESSION["usuario"]=$resultSQL["usuario"];               
        $Smarty->assign("usuarioLoged",$_SESSION["usuario"]);
        $Smarty->assign('headerMessage',cartelHide("Bienvenido ".$resultSQL['nombre']." ".$resultSQL['apellido']));
        
        $_SESSION["access"] = true;
    }else{        
        // echo "incorrecto logeado";
        $Smarty->assign('messageError',cartelHide("El usuario o contrase&ntilde;a no coinciden"));                
        $Smarty->display("login.tpl");
    }
    
    
}else{
    $Smarty->display("login.tpl");
}






?>
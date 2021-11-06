<?php


//$smarty->assign('title_regmod','Registraci&oacute;n');
//$smarty->assign('submitTitle',"Registrar");
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
    
    $result=verifyParams("dni");
    $result["valid"] ? $dni=$result["value"]:$messages["dni"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;

    $result=verifyParams("condicion");
    $result["valid"] ? $condicion=$result["value"]:$messages["condicion"]=cartelError($result["value"]);
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

$Smarty->assign('usuario',$usuario);
$Smarty->assign('nombre',$nombre);
$Smarty->assign('apellido',$apellido);
$Smarty->assign('dni',$dni);
$Smarty->assign('condicion',$condicion);

if ($allOk){
    $resultSQL=$db->users->insert($usuario,$nombre,$apellido,$dni,$condicion,$password);    
    $Smarty->assign('headerMessage',cartelHide("Registro de nuevo usuario completo"));
    header("Location:index.php");
    
}else{
    $Smarty->assign('messageError',$messages);
    $Smarty->display("register.tpl");
    
}






//$Smarty->display("register.tpl");




?>
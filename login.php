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

    // Recordar contraseña
    if (!empty($_POST['recordar'])) {
        setcookie("usuario_cookie", $_POST["usuario"], time()+(60*60*24*365));
        setcookie("password_cookie", $_POST["password"], time()+(60*60*24*365));
    }else{
        if(isset($_COOKIE['usuario_cookie'])){
            setcookie("usuario_cookie", "");
        }
        if(isset($_COOKIE['usuario_cookie'])){
            setcookie("password_cookie", "");
        }
    }
    if(isset($_COOKIE["usuario_cookie"])){
        $Smarty->assign("usuario",$_COOKIE["usuario_cookie"]);
        $Smarty->assign("checked","checked");
    }
    if(isset($_COOKIE["password_cookie"])){
        $Smarty->assign("password",$_COOKIE["password_cookie"]);
    }


    if ($allOk){
        $resultSQL=$db->users->login($usuario,$password);   

        if ($db->db->numRows()>0){
            session_destroy();
            session_start();

            $_SESSION["id"]=$resultSQL["id"];
            $_SESSION["usuario"]=$resultSQL["usuario"];              
            $Smarty->assign("usuarioLoged",$_SESSION["usuario"]);
            $Smarty->assign('headerMessage',cartelHide("Bienvenido ".$resultSQL['nombre']." ".$resultSQL['apellido']));
            $_SESSION["condicion"] = $resultSQL["condicion"];
            $_SESSION['time'] = time();
            header("Location:index.php");

        }else{

            $Smarty->assign('messageError',cartelError("El usuario o contrase&ntilde;a no coinciden"));                
            $Smarty->display("login.tpl");

        }
    }else{
        $Smarty->display("login.tpl");
    }






?>
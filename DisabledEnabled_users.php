<?php

    $Smarty->display("DisabledEnabled_users.tpl");

    if(isset($_POST["id"])){
        
        $IdUser=$db->users->getById($_POST["id"]);

        if($IdUser["activo"] == 1){
            $db->users->enableOrdissableById($_POST["id"],0);
        }else{
            $db->users->enableOrdissableById($_POST["id"],1);
        }
        
    }
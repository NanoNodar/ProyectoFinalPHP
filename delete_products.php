<?php

    $Smarty->display("delete_products.tpl");
    
    if(isset($_POST["id"])){
        $db->articulos->deleteById($_POST["id"]);
    }
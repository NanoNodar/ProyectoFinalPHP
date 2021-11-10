<?php

    $resultSQL=$db->users->deleteById($idUsuario);

    session_destroy();
    session_start();

    header("Location:index.php");

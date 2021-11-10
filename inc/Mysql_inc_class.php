<?php

class Mysql_inc{
public $db;
public $connected;
public $result;
public $users;
public $messages;
public $categorias;
public $articulos;

    public function __construct(){
        $this->db=new Mysql_connect();
        
        $this->users=new Mysql_users($this->db);

        $this->articulos=new Mysql_Articulos($this->db);

        $this->categorias=new Mysql_Categorias($this->db);
    }


}
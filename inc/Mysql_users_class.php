<?php

class Mysql_users{
    public $db;

    public function __construct($db){
        $this->db=$db;
    } 
    
    public function getAll(){
        $query = "SELECT id,usuario,nombre,apellido,dni,condicion,fechaIng,activo FROM users";
        $this->db->execQuery($query);
        return $this->db->getResult();
    }

    public function insert($usuario,$nombre,$apellido,$dni,$password){

        $usuario=$this->db->escStr($usuario);
        $nombre=$this->db->escStr($nombre);
        $apellido=$this->db->escStr($apellido);
        $dni=$this->db->escStr($dni);
        $password=$this->db->escStr($password);

        $query="INSERT INTO users". 
               "(usuario,nombre,apellido,dni,condicion,password) values".
               "('{$usuario}','{$nombre}','{$apellido}','{$dni}','cliente','{$password}')"; 

       $this->db->execQuery($query);
    }

    public function deleteById($id){
        $id=$this->db->escStr($id);
        $query="DELETE FROM users WHERE id={$id}";
        return $this->db->execQuery($query);
    }

    public function updateById($id,$usuario,$nombre,$apellido,$password){
        $id=$this->db->escStr($id);
        $usuario=$this->db->escStr($usuario);
        $nombre=$this->db->escStr($nombre);
        $apellido=$this->db->escStr($apellido);
        $password=$this->db->escStr($password);
 
        $query="UPDATE users SET usuario='{$usuario}',nombre='{$nombre}',apellido='{$apellido}',password='{$password}' WHERE id={$id}"; 
        
        return $this->db->execQuery($query);        
    }

    
    public function login($usuario,$password){
        
        $usuario=$this->db->escStr($usuario);
        $password=$this->db->escStr($password);

        $query="SELECT id,usuario,nombre,apellido,dni,condicion FROM users WHERE usuario = '{$usuario}' AND password = '{$password}' AND activo='1'";         
        $this->db->execQuery($query);
                     
        return $this->db->getOneRow($query);
               
    }

    public function getById($id){
        $id=$this->db->escStr($id);
        
        $query="SELECT * FROM users WHERE id={$id}";                
        $this->db->execQuery($query);
        return $this->db->getOneRow();
    }
    
    public function enableOrdissableById($id,$active){    
        $id=$this->db->escStr($id);
        $active=$this->db->escStr($active);
        
        $query="UPDATE users ".
               "SET activo='{$active}'".
               "WHERE id={$id}";
        return $this->db->execQuery($query);
    }


}
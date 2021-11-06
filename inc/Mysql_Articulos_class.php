<?php

    class Mysql_Articulos{
        public $db;


        public function __construct($db){
            $this->db=$db;
        }
        
        public function getAll(){
            $query = "SELECT * FROM articulos";
            $this->db->execQuery($query);
            return $this->db->getResult();
        }
        
        public function insert($id_categoria,$nombre,$precio,$stock,$url,$detalle){

            $id_categoria=$this->db->escStr($id_categoria);
            $nombre=$this->db->escStr($nombre);
            $precio=$this->db->escStr($precio);
            $stock=$this->db->escStr($stock);
            $url=$this->db->escStr($url);
            $detalle=$this->db->escStr($detalle);

            $query="INSERT INTO articulos". 
                   "(id_categoria,nombre,precio,stock,url,detalle,detalle) values".
                   "('{$id_categoria}','{$nombre}','{$precio}','{$stock}','{$url}','{$detalle}')"; 
    
           $this->db->execQuery($query);
        }

        public function getById($id){
            $id=$this->db->escStr($id);
            
            $query="SELECT * FROM articulos WHERE id={$id}";                
            $this->db->execQuery($query);
            return $this->db->getOneRow();
        }
        
        public function updateById($id,$id_categoria,$nombre,$precio,$stock,$url,$detalle){
            $id=$this->db->escStr($id);
            $id_categoria=$this->db->escStr($id_categoria);
            $nombre=$this->db->escStr($nombre);
            $precio=$this->db->escStr($precio);
            $stock=$this->db->escStr($stock);
            $url=$this->db->escStr($url);
            $detalle=$this->db->escStr($detalle);
     
         
            $query="UPDATE articulos ". 
                   "SET id_categoria='{$id_categoria}',nombre='{$nombre}',precio='{$precio}',stock='{$stock}',url='{$url}',detalle='{$detalle}' ".
                   "WHERE id={$id}"; 
            
            return $this->db->execQuery($query);        
        }

        public function deleteById($id){
            $id=$this->db->escStr($id);
            $query="DELETE FROM articulos WHERE id={$id}";
            return $this->db->execQuery($query);
        }
    }
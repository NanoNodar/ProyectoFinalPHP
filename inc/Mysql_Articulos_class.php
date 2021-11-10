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

        public function getRecomended($recomendado){
            $recomendado=$this->db->escStr($recomendado);
            
            $query = "SELECT * FROM articulos WHERE recomendado={$recomendado}";
            $this->db->execQuery($query);
            return $this->db->getResult();
        }
        
        public function insert($id_categoria,$nombre,$precio,$stock,$url,$detalle,$recomendado){

            $id_categoria=$this->db->escStr($id_categoria);
            $nombre=$this->db->escStr($nombre);
            $precio=$this->db->escStr($precio);
            $stock=$this->db->escStr($stock);
            $url=$this->db->escStr($url);
            $detalle=$this->db->escStr($detalle);
            $recomendado=$this->db->escStr($recomendado);

            $query="INSERT INTO articulos". 
                   "(id_categoria,nombre,precio,stock,url,detalle,recomendado) values".
                   "('{$id_categoria}','{$nombre}','{$precio}','{$stock}','{$url}','{$detalle}','{$recomendado}')"; 
    
           $this->db->execQuery($query);
        }

        public function getById($id){
            $id=$this->db->escStr($id);
            
            $query="SELECT * FROM articulos WHERE id={$id}";                
            $this->db->execQuery($query);
            return $this->db->getOneRow();
        }
        
        public function updateById($id,$id_categoria,$nombre,$precio,$stock,$url,$detalle,$recomendado){
            $id=$this->db->escStr($id);
            $id_categoria=$this->db->escStr($id_categoria);
            $nombre=$this->db->escStr($nombre);
            $precio=$this->db->escStr($precio);
            $stock=$this->db->escStr($stock);
            $url=$this->db->escStr($url);
            $detalle=$this->db->escStr($detalle);
            $recomendado=$this->db->escStr($recomendado);
         
            $query="UPDATE articulos ". 
                   "SET id_categoria='{$id_categoria}',nombre='{$nombre}',precio='{$precio}',stock='{$stock}',url='{$url}',detalle='{$detalle}',recomendado={$recomendado} ".
                   "WHERE id={$id}"; 
            
            return $this->db->execQuery($query);        
        }

        public function deleteById($id){
            $id=$this->db->escStr($id);
            $query="DELETE FROM articulos WHERE id={$id}";
            return $this->db->execQuery($query);
        }
    }
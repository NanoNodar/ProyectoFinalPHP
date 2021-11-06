<?php

    class Mysql_Categorias{
        public $db;


        public function __construct($db){
            $this->db=$db;
        }

        public function getById($id_categoria){
            $id_categoria=$this->db->escStr($id_categoria);
            
            $query="SELECT * FROM articulos WHERE id_categoria={$id_categoria}";                
            $this->db->execQuery($query);
            return $this->db->getResult();
        }
    }
<?php

class Mysql_connect{
    public $db;
    public $connected;
    public $result;
    
    public function __construct(){
        $this->db=new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);
        if($this->db->connect_error){
            $this->connected=false;
            die('Error de conexion '.$this->db->connect_error);
        }else{
            $this->connected=true;
        }
    }

    public function execQuery($query){
        if($this->connected){
            $this->result=mysqli_query($this->db,$query);
            if(!$this->result){
                echo "Error: ". mysqli_error($this->db);
            }
        }else{
            return 0;
        }
    }

    public function numRows(){
        return mysqli_num_rows($this->result);
    }

    public function getOneRow(){
        return mysqli_fetch_assoc($this->result);
    }

    public function getAllRows(){
        $resultArray= []; 
        while ($row=$this->getOneRow()){
            $resultArray[]=$row;
        }
    }

    public function showResult($result){
        echo "<table border=1 >";
        foreach($result as $row){
            echo "<tr>";
            foreach($row as $data){
                echo "<td>".$data."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    
    }
    

    public function escStr($str){
        return $this->db->real_escape_string($str);
    }

    public function getResult(){
        return $this->result;
    }
}
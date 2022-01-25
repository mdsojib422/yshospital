<?php 

require_once "auth/Db.php";


class Ysquery{
    private $db;

    function __CONSTRUCT(){
        $this->db = new DB();
    }

    public function getOneCollumns($id,$table,$clname){
        $sql = "SELECT $clname FROM $table WHERE id = $id";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;        
        }
    }
    
}
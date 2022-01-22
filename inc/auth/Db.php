<?php 

class DB{
    private $host = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "yshospital";
    public $pdo;

   public function __construct(){
       if(!isset($this->pdo)){
            try {
                $link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->dbuser,$this->dbpass);
                $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo = $link;
            } catch (PDOException $e) {
                die("Failed to connect with Database ".$e->getMessage());
            }  
       }
     }
}


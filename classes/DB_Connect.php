<?php
class DB_Connect{


    private $host = "localhost";
    private  $user = "root";
    private  $pass = "";
    private $db = "lsc_db";
    protected $conn;
    

    public function __construct()
    {


        
    try {
    
        $dns = "mysql:host=".$this->host.";dbname=".$this->db;
        $this->conn = new PDO($dns, $this->user, $this->pass);
    } catch (PDOException $e) {
    
    
        die($e->getMessage());
    }
        
    }
   


}
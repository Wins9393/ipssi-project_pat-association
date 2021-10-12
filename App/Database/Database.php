<?php 

namespace App\Database;

class Database {
    
    private $conn;

    public function __construct(){

        $host = "127.0.0.1";
        $database_name = "pet-assoc";
        $username = "root";
        $password = "";

        $this->conn = new \PDO("mysql:host=$host;dbname=$database_name", $username, $password, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]);
    }
    
    public function getConnection(){
        return $this->conn;
    }
}  
?>
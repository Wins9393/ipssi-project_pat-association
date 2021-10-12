<?php

namespace App\Model;

use App\Database\Database;
use App\Interfaces\ModelInterface;

abstract class Model implements ModelInterface{
    
    protected $db;
    protected $table;

    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getConnection();
    }

    public function getList(){
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    public function getAvailable()
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE booked=false");
        return $query->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    public function getOne($id)
    {
        $prepare = $this->db->prepare("SELECT * FROM $this->table WHERE id=:id");
        $prepare->bindValue(":id", $id);
        $prepare->execute();
        return $prepare->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }

    public function delete($id)
    {
        $prepare = $this->db->prepare("DELETE FROM $this->table WHERE id=:id");
        $prepare->bindValue(":id", $id);
        $prepare->execute();
    }
}
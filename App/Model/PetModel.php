<?php

namespace App\Model;

use App\Model\Model;

class PetModel extends Model{

    protected $db;
    protected $table = "pet";

    public function create ($pet)
    {
        $statement = "INSERT INTO pet (name, age, booked)
                     VALUES(:name, :age, :booked)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":name", $pet->getName());
        $prepare->bindValue(":age", $pet->getAge());
        $prepare->bindValue(":booked", $pet->getBooked());
        $prepare->execute();
    }

    public function update($pet)
    {
        $id = (int)$pet['id'];
        $statement = "UPDATE pet
        SET name = :name, age = :age, booked = :booked
        WHERE id=:id";
        
        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":id", $id);
        $prepare->bindValue(":name", $pet['name']);
        $prepare->bindValue(":age", $pet['age']);
        $prepare->bindValue(":booked", $pet['booked']);
        $prepare->execute();
    }
}
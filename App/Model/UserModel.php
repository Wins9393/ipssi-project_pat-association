<?php

namespace App\Model;

use App\Model\Model;

class UserModel extends Model{

    protected $db;
    protected $table = "user";

    public function create ($user)
    {
        $statement = "INSERT INTO user (name, mail, password, admin)
                     VALUES(:name, :mail, :password, :admin)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":name", $user->getName());
        $prepare->bindValue(":mail", $user->getMail());
        $prepare->bindValue(":password", $user->getPassword());
        $prepare->bindValue(":admin", $user->getAdmin());
        $prepare->execute();
    }

    public function update($user)
    {
        $id = (int)$user['id'];
        $statement = "UPDATE user
        SET name = :name, mail = :mail, password = :password, admin = :admin
        WHERE id=:id";
        
        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":id", $id);
        $prepare->bindValue(":name", $user['name']);
        $prepare->bindValue(":mail", $user['mail']);
        $prepare->bindValue(":password", $user['password']);
        $prepare->bindValue(":admin", $user['admin']);
        $prepare->execute();
    }

    public function getUser($mail, $password)
    {
        $prepare = $this->db->prepare("SELECT * FROM $this->table WHERE mail=:mail AND password=:password");
        $prepare->bindValue(":mail", $mail);
        $prepare->bindValue(":password", $password);
        $prepare->execute();
        return $prepare->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));
    }
}
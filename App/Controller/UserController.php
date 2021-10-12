<?php

namespace App\Controller;

use App\Entity\User;
use App\Model\UserModel;
use App\Controller\DefaultController;

class UserController extends DefaultController{

    public function __construct()
    {
        $this->manager = new UserModel; 
    }

    public function updateUser($user)
    {
        if (!empty($_POST)) {
            $this->manager->update($user);
        }
    }

    public function getSingleUser($mail, $password)
    {
        if (!empty($_POST)) {
            $user = $this->manager->getUser($mail, $password);
            // var_dump($user);
            // $this->render("admin", [$arrayEntity => $user]);
            return $user;
        }
    }

    public function isGranted($user, $arrayEntity)
    {
        if($user && $user[0]->admin){
            // $this->render("admin", [$arrayEntity => $user]);
            $_SESSION['name'] = $user[0]->name;
            $_SESSION['admin'] = $user[0]->admin;
            return [$arrayEntity => $user];
        }else{
            $this->render("erreur");
        }
    }
}
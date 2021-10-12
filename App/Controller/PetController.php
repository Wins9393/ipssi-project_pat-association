<?php

namespace App\Controller;

use App\Entity\Pet;
use App\Model\PetModel;
use App\Controller\DefaultController;

class PetController extends DefaultController{

    public function __construct()
    {
        $this->manager = new PetModel; 
    }

    public function deletePet($id){
        $this->manager->delete($id);
        header('Location: /php8-pet-assoc/src/index.php');
    }

    public function addPet()
    {
        if (!empty($_POST)) {

            $pet = new Pet();
            $pet->hydrate($_POST);
            $this->manager->create($pet);
            $this->redirectToRoute("home");
            // header('Location: /php8-pet-assoc/src/index.php');

        }
        $this->render("addPet");
    }

    public function updatePet($pet)
    {
        if (!empty($_POST)) {
            $this->manager->update($pet);
            // $this->redirectToRoute("home");
        }
    }

    public function getAllAvailable(string $path, $arrayEntity)
    {
        $model = $this->manager->getAvailable();
        $this->render($path, [$arrayEntity => $model]);
    }
}
<?php

use App\Controller\PetController;
use App\Controller\UserController;
use App\Controller\DefaultController;

if(!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

switch ($_GET["page"]) {
    case 'home':
        $controller = new PetController();
        // $controller->getAll("allPets", "pets");
        $controller->updatePet($_POST);
        $controller->getLast10("allPets", "pets");
        break;
    case 'addPet':
        $controller = new PetController();
        $controller->addPet();
        break;
    case 'petsAvailable':
        $controller = new PetController();
        $controller->getAllAvailable("petsAvailable", "pets");
        break;
    case 'allPets':
        $controller = new PetController();
        $controller->getAll("allPets", "pets");
        break;
    case 'petView':
        $controller = new PetController();
        $controller->getEntityById("petView", $_GET["id"], "pet");
        break;
    case 'delete':
        $controller = new PetController();
        $controller->deletePet($_GET["id"]);
        break;
    case 'edit':
        $controller = new PetController();
        $controller->getEntityById("editPet", $_GET["id"], "pet");
        // $controller->updatePet($_POST);
    break;
    case 'connexion':
        $controller = new DefaultController();
        $controller->render("connexion");
        break;
    case 'admin':
        $controller = new UserController();
        if($controller->isGranted($controller->getSingleUser($_POST['mail'], $_POST['password']), 'user')){
            $controller->redirectToRoute("home");
        }else{
            $controller->render("erreur");
        }
        break;
    case 'deco':
        session_destroy();
        $controller = new PetController();
        $controller->redirectToRoute("home");
        break;
    default:
        break;
}
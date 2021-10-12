<?php 

// Récupération des propriétés et stockage dans des variables
$id = $pet->getId();
$name = $pet->getName();
$age = $pet->getAge();
$booked = $pet->getBooked();
$image = $pet->getImage();
?>

<div class="wrapperPet">
    <div class="patEdit">
        <div class="card mt-4" style="width: 30%;">
            <img class="card-img-top" src="<?= $image; ?>" width="230px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 2rem; font-weight: bold;"><?= $name; ?></h5>
            </div>
        </div>
    </div>

    <div class="formContainer">
        <form class="container text-center form" style="color:white" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-outline">
                        <label for="name" class="form-label">Nom:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label for="age" class="form-label">Age:</label>
                        <input type="text" class="form-control" name="age" id="age" value="<?= $age ?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="booked" class="form-label">Réservé:</label>
                <select name="booked" id="booked">
                    <option value="" disabled>--Choisissez une valeur--</option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Image URL:</label>
                <input type="url" class="form-control" name="image" id="image" value="<?= $image ?>">
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Modifier</button>
        </form>
    </div> 
</div>



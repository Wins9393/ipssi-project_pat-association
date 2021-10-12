<?php
// Je n'ai pas réussi à récupérer les données directement dans le router
$id = $pet->getId();
$name = $pet->getName();
$age = $pet->getAge();
$booked = $pet->getBooked();
$image = $pet->getImage();
$createdAt = $pet->getCreatedAt();
?>

<div class="modal fade" id="bookedConfirm" tabindex="-1" role="dialog" aria-labelledby="bookedConfirmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookedConfirmLabel">Réservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Votre réservation a bien été prise en compte
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="wrapperPet" style="width: 80wh; height: 80vh;">
    <div class="card mt-4" style="width: 50%;">
    <img class="card-img-top" src="<?= $image; ?>" width="230px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 2rem; font-weight: bold;"><?= $name; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="font-size: 1.4rem;"><?= $age; ?> Ans</li>
        <li class="list-group-item" style="font-size: 1.4rem;"><?= $booked ? "Réservé" : "Disponible"; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Created At: <?= $createdAt; ?></li>
    </ul>
    <div class="card-body">
        <a href="?page=home" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
        <?php if(!$booked): ?>
        <button class="btn btn-primary btn-lg active" aria-pressed="true" data-bs-toggle="modal" data-bs-target="#bookedConfirm">Book</button>
        <?php endif ?>
        <!-- <a href="?page=edit&id=<?= $pet->getId(); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a> -->
    </div>
    </div>
</div>


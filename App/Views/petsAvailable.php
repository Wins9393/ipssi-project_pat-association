<div class="wrapperPet">
    <h1 class="display-1 m-5">Tous les chiots disponibles</h1>
    <div class="contentWrapper">
    <?php // var_dump($pets) ?>
        <div class="content" style="width: 80%;">
        <?php foreach($pets as $pet): ?>
            <div class="card m-4 petCard" style="width: 18rem;">
                <div class="card-body">
                    <img src="<?= $pet->getImage() ?>" class="card-img-top" alt="...">
                    <h5 class="card-title patTitle"><?= $pet->getName() ?></h5>
                    <h6 class="card-subtitle mb-2"><?= $pet->getAge() ?> ans</h6>
                    <p class="card-text dispo"><?= $pet->getBooked() ? "Réservé" : "Disponible" ?></p>
                    <a href="?page=petView&id=<?php echo $pet->getId(); ?>" class="card-link">Voir</a>
                </div>
            </div>
        <?php endforeach ?>
        </div>  
    </div>
</div>





<div class="wrapperPet">
<?php  if(sizeof($pets) > 10): ?>
    <h1 class="display-1 m-5">Tous les chiots</h1>
<?php  else: ?>
    <h1 class="display-1 m-5">Les derniers arrivés</h1>
<?php  endif ?>
    <div class="contentWrapper">
    <?php // var_dump($pets) ?>
        <div class="content" style="width: 80%;">
        <?php foreach($pets as $pet): ?>
            <div class="card m-4 petCard" style="width: 18rem;">
                <div class="card-body">
                    <img src="<?= $pet->getImage() ?>" class="card-img-top">
                    <h5 class="card-title patTitle"><?= $pet->getName() ?></h5>
                    <h6 class="card-subtitle mb-2"><?= $pet->getAge() ?> ans</h6>
                    <?php if($pet->getBooked()): ?>
                        <p class="card-text booked"><?= $pet->getBooked() ? "Réservé" : "Disponible" ?></p>
                    <?php else: ?>
                        <p class="card-text dispo"><?= $pet->getBooked() ? "Réservé" : "Disponible" ?></p>
                    <?php endif ?>
                    
                    <a href="?page=petView&id=<?php echo $pet->getId(); ?>" class="card-link btn btn-secondary btn-lg">Voir</a>

                    <!-- <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
        <?php endforeach ?>
        </div>  
    </div>
</div>




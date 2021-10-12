<nav class="navbar patNavbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Pat Assoc'</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="?page=petsAvailable">Dispo</a>
            </li>

            <?php if(isset($_SESSION) && empty($_SESSION)): ?>
            <li class="nav-item">
            <a class="nav-link" href="?page=connexion">Admin</a>
            </li>
            <?php endif ?>
            <?php if(isset($_SESSION) && !empty($_SESSION)): ?>
            <li class="nav-item">
            <a class="nav-link" href="?page=deco">Deconnexion</a>
            </li>
            <?php endif ?>
        </ul>
        </div>
    </div>
</nav>
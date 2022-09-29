<?php
include_once('config/mysql.php');
include_once('variables.php');
include_once('functions.php');

?><?php include_once('login.php'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo ($rootUrl) . 'home.php'; ?>">Site de Recettes</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="<?php echo ($rootUrl) . 'home.php'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ($rootUrl) . 'contact.php'; ?>">Contact</a>
                </li>

                <?php if ($loggedUser) : ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ($rootUrl) . 'recipes/create.php'; ?>">Ajoutez une recette
                        !</a>
                </li>

                <?php endif; ?>
            </ul>
        </div>
        <div class="user-widget">
            <?php if ($loggedUser) : ?>
            <a href="/tests/logout.php">Se déconnecter</a>

            <?php else : ?>
            <a href="/tests/home.php">Se connecter</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<?php if ($loggedUser) : ?>
<div class="alert alert-success" role="alert">
    Bonjour <?php echo ($loggedUser['full_name']); ?> et bienvenue sur le site !

</div><?php endif; ?>
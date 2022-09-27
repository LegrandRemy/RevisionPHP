<?php session_start(); //$_session 
?>

<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=partage_de_recettes;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- inclusion des variables et fonctions -->
        <?php
        include_once('variables.php');
        include_once('functions.php');
        ?>

        <!-- Navigation -->
        <?php include_once('header.php'); ?>

        <!-- Inclusion du formaulaire de connexion -->
        <?php include_once('login.php'); ?>
        <h1>Site de recettes</h1>

        <!-- Si l'utilisateur existe, on affiche les recettes -->

        <?php foreach (getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?> </div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
        <?php endforeach ?>


    </div>

    <?php include_once('footer.php'); ?>

</body>

</html>
<?php

$recipesArray = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'remylegrand@exemple.fr',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'remylegrand@exemple.fr',
        'is_enabled' => true,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'eve.dermigny@exemple.com',
        'is_enabled' => true,
    ],
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <h2>Affichage des recettes</h2>
        <!-- Boucle sur les recettes -->
        <?php foreach ($recipesArray as $value) : ?>
        <!-- si la clé existe et a pour valeur "vrai", on affiche -->
        <?php if (array_key_exists('is_enabled', $value) && $value['is_enabled'] == true) : ?>

        <article>
            <h3><?php echo $value['title']; ?></h3>
            <div><?php echo $value['recipe']; ?></div>
            <i><?php echo $value['author']; ?></i>
        </article>

        <?php endif; ?>
        <?php endforeach ?>
    </div>
</body>

</html>
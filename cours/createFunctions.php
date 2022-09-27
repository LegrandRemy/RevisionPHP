<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Creer des fonctions</title>
</head>

<body>

    <?php
    //Fonction créée :

    function isValidRecette(array $recette): bool
    {
        if (array_key_exists('is_enabled', $recette)) {
            $isEnabled = $recette['is_enabled'];
        } else {
            $isEnabled = false;
        }
        return $isEnabled;
    }
    ?>

    <h3>Exemple 2 : recuperer des recettes valides</h3>
    <P>
        <?php

        $recettesArray = [
            [
                'title' => 'Cassoulet',
                'recipe' => 'Etape 1 : des flageolets !',
                'author1' => 'remylegrand@exemple.fr',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => 'Etape 1 : de la semoule',
                'author1' => 'evelegrand@exemple.fr',
                'is_enabled' => true,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => 'Etape 1 : prenez une belle escalope',
                'author1' => 'eve.dermigny@exemple.com',
                'is_enabled' => false,
            ],
        ];

        //AVANT
        foreach ($recettesArray as $recette) {
            if ($recette['is_enabled']) {
                echo $recette['title'];
                echo $recette['author1'];
            }
        }

        // APRES

        function getRecetteArray(array $recettesArray): array
        {
            $validRecettes = [];

            foreach ($recettesArray as $recette) {
                if (isValidRecette($recette)) {
                    $validRecettes[] = $recette;
                }
            }

            return $validRecettes;
        }

        // construire l'affichage HTML des recettes
        foreach (getRecetteArray($recettesArray) as $recette) {
            echo $recette['title'];
        }
        ?>
    </P>

    <h3>Exemple 3 : recuperer le nom d'un utilisateur en fonction du mail</h3>
    <?php

    $users = [
        [
            'full_name' => 'Rémy Legrand',
            'email' => 'remylegrand19@exemple.com',
            'age' => 36,
        ],
        [
            'full_name' => 'Eve Dermigny',
            'email' => 'evedermigny@exemple.com',
            'age' => 35,
        ],
        [
            'full_name' => 'Clea Legrand',
            'email' => 'clealegrand@exemple.com',
            'age' => 7,
        ],
    ];

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'remylegrand19@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'clealegrand@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'evedermigny@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'clealegrand@exemple.com',
            'is_enabled' => true,
        ],
    ];

    $recipes10 = [
        [
            'title' => 'kebab',
            'recipe' => '',
            'author' => 'remylegrand19@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'pizza',
            'recipe' => '',
            'author' => 'clealegrand@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'tacos',
            'recipe' => '',
            'author' => 'evedermigny@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'clealegrand@exemple.com',
            'is_enabled' => true,
        ],
    ];

    function displayAuthor(string $authorEmail, array $users): string
    {
        for ($i = 0; $i < count($users); $i++) {
            $author = $users[$i];
            if ($authorEmail === $author['email']) {
                return $author['full_name'] . '(' . $author['age'] . ' ans)';
            }
        }
    }






    function isValidRecipe(array $recipe): bool
    {
        if (array_key_exists('is_enabled', $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }

        return $isEnabled;
    }

    function getRecipes(array $recipes): array
    {
        $valid_recipes = [];

        foreach ($recipes as $recipe) {
            if (isValidRecipe($recipe)) {
                $valid_recipes[] = $recipe;
            }
        }

        return $valid_recipes;
    }
    ?>

    <div>
        <h1>Liste des recettes de cuisine</h1>
        <?php foreach (getRecipes($recipes) as $recipe) : ?>

        <div>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </div>
        <?php endforeach ?>
    </div>
</body>

</html>
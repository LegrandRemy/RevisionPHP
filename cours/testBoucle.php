<?php
//Déclaration du tableau des recettes
$recipes = [
    ['cassoulet', '[...]', 'Rémy', true,],
    ['couscous', '[...]', 'Rémy', false,],
]; ?>
<!DOCTYPE html lang="fr">

<head>
    <link rel="stylesheet" href="assets/style.css">
    <title>Affichage des recettes</title>
</head>

<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++) : ?>
        <li><?php echo $recipes[$lines][0] . '(' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
    <h3> *** variable simple *** </h3><br>
    <?php
    $recipeTitle = 'Cassoulet';
    echo "La recette du " . $recipeTitle;
    // Cela affichera : La recette du Cassoulet
    ?>

    <h2>*** TABLEAU NUMEROTES ***</h2>
    <P>
        <?php
        $recipes = ['cassoulet', 'couscous', 'escalope milanaise', 'salade cesar',];
        //la fonction array permet aussi de créer un array
        $recipes = array('cassoulet', 'couscous', 'escalope milanaise', 'salade cesar')
        ?>
        <?php
        echo $recipes[1]; // Cela affichera : Couscous
        ?>
    </P>

    <h2>*** TABLEAU ASSOCIATIF *** </h2>
    <P>
        <?php
        $recipes = [
            'title' => 'cassoulet',
            'recipe' => 'etape 1 : des flageolets, etape 2 : ...',
            'author' => 'remylegrand@exemple.fr',
            'enabled' => true,
        ]; // => la fleche veut dire "associé à"  la propriete "title" du tableau $recipe a pour valeur "cassoulet"
        ?>
        <!--  autre exemple de tableau associatif -->
        <?php
        $recipe['title'] = 'Cassoulet';
        $recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
        $recipe['author'] = 'john.doe@exemple.com';
        $recipe['enable'] = true;
        ?>
        <?php // pour extraire le titre de la recette
        echo $recipe['title'];
        ?>
        <!-- 
                Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque
            élément du tableau contiendra alors un prénom.

            Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une
            adresse peut être découpée en nom, prénom, nom de rue, ville… -->
    </P>

    <h2>*** PARCOURIR UN TABLEAU *** </h2>
    <h3>* La boucle FOR *</h3>
    <?php
    /**
     * Déclaration du tableau des recettes
     * Chaque élément du tableau est un tableau numéroté (une recette)
     */
    $recipes = [
        ['Cassoulet', '[...]', 'remylegrand@exemple.com', true,],
        ['Couscous', '[...]', 'remylegrand@exemple.com', false,],
    ];
    for ($lines = 0; $lines <= 1; $lines++) {
        echo $recipes[$lines][0];
    } ?>
    <!-- Quand on écrit $recipes[$lines], la variable $lines est d'abord remplacée par sa valeur. 
Exemple :
Si $lines vaut 1, cela signifie qu'on cherche ce que contient $recipes[1][0] , c'est-à-dire : Couscous.
La boucle FOREACH est plus adaptée aux tableaux
-->
    <h3>* La boucle FOREACH * </h3>
    <strong>EXEMPLE 1 avec tableau numéroté </strong> <br><br>
    <?php

    // Déclaration du tableau des recettes
    $recipes = [
        ['Cassoulet', '[...]', 'remylegrand@exemple.com', true,],
        ['Couscous', '[...]', 'remylegrand@exemple.com', false,],
    ];

    foreach ($recipes as $recipe) {
        echo $recipe[0]; // Affichera Cassoulet, puis Couscous
    }
    ?>
    <p><strong> EXEMPLE 2 avec tableau associatif </strong><br><br>
        <?php
        $recipe = [
            'title' => 'Cassoulet ',
            'recipe' => ' Etape 1 : des flageolets, Etape 2 : ... ',
            'author' => ' remylegrand@exemple.com ',
            'enabled' => true,
        ];

        foreach ($recipe as $value) {
            echo $value;
        }

        /**
         * AFFICHE
         * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
         * 
         * foreach va mettre tour à tour dans la variable $value  :
         * - le titre de la recette ;
         * - les étapes de la recette ;
         * - l'auteur ;
         * - et la réponse à "enabled"...
         *… contenus dans le tableau $recipe 
         *On met donc entre parenthèses :
         *D'abord le nom du tableau, ici $recipe  .
         *Ensuite le mot-clé as  (qui signifie « en tant que »).
         *Enfin, le nom d'une variable que vous choisissez, et qui va contenir tour à tour chacune des valeurs du tableau, ici $value */

        // Entre les accolades, on n'utilise donc que la variable  $recipe  .

        // La boucle s'arrête lorsqu'on a parcouru tous les éléments de l'array.

        ?>
    </p>
    <p><strong> EXEMPLE 3 avec tableau de tableaux </strong><br><br>
        <?php

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'remylegrand@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'remylegrand@exemple.com',
                'is_enabled' => false,
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
                'is_enabled' => false,
            ],
        ];

        foreach ($recipes as $value) {
            echo $value['title'] . ' contribué(e) par : ' . $value['author'] . PHP_EOL;
        } ?><br>
    <p> <strong> avec recuperation de la clé de l'element </strong><br>
        <?php
        $recipe = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'clealegrand@exemple.com',
        ];
        foreach ($recipe as $property => $propertyValue) {
            echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
        }
        // Avec cette façon de procéder, vous avez maintenant dans la boucle la clé ET la valeur
        ?> </p><br>
    <h2> ** Affichez rapidement un tableau avec print_r **</h2>
    <p>
        <!-- si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient le
            tableau, vous pouvez faire appel à la fonction print_r . C'est une sorte de echo spécialisé dans les
            tableaux. 
            
            Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <br /> pour les 
            retours à la ligne. Pour bien les voir, il faut donc utiliser la balise HTML <pre>  qui nous permet 
                d'avoir un affichage plus correct.
            -->
        <?php

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
        ];

        echo '<pre>';
        print_r($recipes);
        echo '</pre>'; ?>

    </p>
    <h2> *** Rechercher dans un tableau ***</h2>
    <p>
        <!-- array_key_exists pour vérifier si une clé existe dans le tableau.

                in_array pour vérifier si une valeur existe dans le tableau.

                array_search pour récupérer la clé d'une valeur dans le tableau. -->
    <h4>Vérifiez si une clé existe dans un tableau avec <strong>array_key_exists</strong></h4>
    <p> <?php
        $recipe = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'clealegrand@exemple.com',
        ];

        if (array_key_exists('title', $recipe)) {
            echo 'La clé "title" se trouve dans la recette !';
        }

        if (array_key_exists('commentaires', $recipe)) {
            echo 'La clé "commentaires" se trouve dans la recette !';
        } ?>
    </p>
    <h4>Vérifiez si une valeur existe dans un tableau avec <strong>in_array</strong></h4>
    <!-- in_array renvoie : true si la valeur se trouve dans le tableau ;
                            false si elle ne s'y trouve pas. -->
    <p>
        <?php
        $users = [
            'Remy Legrand',
            'Eve Dermigny',
            'Clea Legrand',
        ];

        if (in_array('Remy Legrand', $users)) {
            echo 'Remy fait bien partie des utilisateurs enregistrés !';
        }

        if (in_array('Arlette Chabot', $users)) {
            echo 'Arlette fait bien partie des utilisateurs enregistrés !';
        } ?>
    </p>
    <h4>Récupérez la clé d'une valeur dans un tableau avec <strong>array_search</strong></h4>
    <!-- Voici ce que renvoie la fonction :

        Si elle a trouvé la valeur, array_search renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).

        Si elle n'a pas trouvé la valeur, array_search renvoie false  . -->
    <p>
        <?php
        $users = [
            'Remy Legrand',
            'Eve Dermigny',
            'Clea Legrand',
        ];

        $positionRemy = array_search('Remy Legrand', $users);
        echo '"Remy" se trouve en position ' . $positionRemy . PHP_EOL;
        echo "<br>";
        $positionClea = array_search('Clea Legrand', $users);
        echo '"Clea" se trouve en position ' . $positionClea . PHP_EOL;
        ?>
    </p>
    </p>



</body>

</html>
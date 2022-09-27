<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Principe des fonctions</title>
</head>

<body>
    <h2>*** COMPRENDE LE PRINCIPE D'UNE FONCTION ***</h2>
    <!-- On donne en entrée à la fonction un paramètre sur lequel elle va faire 
        des calculs (ici, une recette sous forme d'un tableau).
        Et la fonction nous retourne en sortie le résultat :  true  . -->
    <p> $recipe=[ 'title'=> 'Escalope milanaise',<br>
        'recipe' => '',<br>
        'author' => 'remylegrand@exemple.com',<br>
        'is_enabled' => true,<br>
        ];<br>
        <br>
        allowRecipe($recipe); // retourne le booléen true<br>
    </p>
    <h2>*** APPELER UNE FONCTION ***</h2>
    <p>

        allowRecipe();<br><br>
        Comme vous le voyez, j'ai simplement écrit le nom de la fonction, suivi de parenthèses vides, puis de
        l'inévitable point-virgule. En faisant cela, j'appelle la fonction allowRecipe mais je ne lui envoie aucune
        information, aucun paramètre.

        Certaines fonctions peuvent fonctionner sans paramètres, mais elles sont assez rares. Dans le cas de
        allowRecipe
        , ça n'a pas de sens de l'appeler sans lui donner la recette nécessaire pour décider !

        Si on veut lui envoyer un paramètre (un nombre, une chaîne de caractères, un booléen...), il faut l'écrire
        entre
        les parenthèses :
        <br><br>
        /**
        * Il n'est pas nécessaire de déclarer une variable $recipe
        * pour passer l'information en tant que paramètre d'une fonction.
        */<br><br>

        allowRecipe([<br>
        'title' => 'Escalope milanaise',<br>
        'recipe' => '',<br>
        'author' => 'mathieu.nebra@exemple.com',<br>
        'is_enabled' => true,<br>
        ]);<br><br>
        Ainsi, allowRecipe saura qu'elle doit travailler avec le tableau PHP passé en paramètre.

        Souvent, les fonctions acceptent plusieurs paramètres. Vous devez dans ce cas les séparer par des virgules :
        <br><br>
        CODE PHP :<br>
        fonctionImaginaire(17, 'Vert', true, 41.7);<br>
        Cette fonction recevra quatre paramètres :<br>

        - 17 ;<br>

        - le texte « Vert » ;<br>

        - le booléen Vrai ;<br>

        - et le nombre 41,7.<br>
    </p>

    <h2>*** RECUPEREZ LA VALEUR DE RETOUR DE LA FONCTION ***</h2>
    <P>Il y a en effet deux types de fonctions :

        Celles qui ne retournent aucune valeur (ça ne les empêche pas d'effectuer des actions).

        Celles qui retournent une valeur. <br>
        Si la fonction ne retourne aucune valeur, il n'y a rien de plus à faire que dans les codes précédents. La
        fonction est appelée, elle fait son travail. On ne lui demande rien de plus.

        En revanche, si la fonction retourne une valeur (comme ça devrait être le cas pour allowRecipe ), on la récupère
        dans une variable, comme ceci : <br>

    <p>
        $isAllowed = allowRecipe([<br>
        'title' => 'Escalope milanaise',<br>
        'recipe' => '',<br>
        'author' => 'mathieu.nebra@exemple.com',<br>
        'is_enabled' => true,<br>
        ]);<br><br>

        if ($isAllowed) {<br>
        echo 'La recette doit être affichée !';<br>
        } else {<br>
        echo 'La recette doit être cachée !';<br>
        } <br></p>
    </P>

    <h2>*** UTILISER LES FONCTIONS PRETES A L'EMPLOI PHP ***</h2>
    <P>PHP propose des centaines de fonctions prêtes à l'emploi. Sur le site officiel, la documentation PHP les
        répertorie toutes, classées par catégorie.

        Ces fonctions sont très pratiques. En fait, c'est en partie là que réside la force de PHP : ses fonctions sont
        vraiment excellentes car elles couvrent la quasi-totalité de nos besoins. En fait, pratiquement à chaque fois
        que je m'apprêtais à écrire une fonction, j'ai pu remarquer que celle-ci existait déjà.

        Voici un petit aperçu de ce que peuvent vous permettre de faire des fonctions PHP : <br>

        - <strong>str_replace</strong> pour rechercher et remplacer des mots dans une variable ;<br>

        - <strong>move_uploaded_file</strong> pour envoyer un fichier sur un serveur ;<br>

        - <strong>imagecreate</strong> pour créer des images miniatures (aussi appelées "thumbnails") ;<br>

        - <strong>mail</strong> pour envoyer un mail avec PHP (très pratique pour faire une newsletter) ;<br>

        - de nombreuses options pour modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc.
        ;<br>

        - <strong>crypt</strong> pour chiffrer des mots de passe ;<br>

        - <strong>date</strong> pour renvoyer l'heure, la date, etc.<br></P>

    <h2>*** Manipuler du texte avec les fonctions ***</h2>
    <p>
        De nombreuses fonctions permettent de manipuler le texte. En voici trois qui peuvent être utiles : <br>

        <strong> strlen</strong> pour calculer la longueur d'une chaîne de caractères ; <br>

        <strong> str_replace</strong> pour rechercher et remplacer une chaîne de caractères ; <br>

        <strong> sprintf</strong> pour formater une chaîne de caractères. <br>

    <h3> * Calculer la longueur d'une chaine de caractères avec <strong>strlen</strong> * </h3>

    <?php
    $recipe = 'etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
    $length = strlen($recipe);

    echo 'La phrase ci dessus comporte ' . $length . ' caractères : ' . "\n" . $recipe;
    ?>
    </p>
    <h3> * Recherchez et remplacez une chaine de caractères avec <strong>str_replace</strong> * </h3>
    <p>
        <?php
        echo str_replace('c', 'C', 'le cassoulet, c\'est très bon'); ?> <br>
        <br>On a besoin d'indiquer trois paramètres :

        La chaîne qu'on recherche – ici, les « c » (on aurait pu rechercher un mot aussi).

        La chaîne qu'on veut mettre à la place – ici, on met des « C » à la place des « c ».

        La chaîne dans laquelle on doit faire la recherche.

        Ce qui nous donne « le Cassoulet, C'est très bon ».
    </p>

    <h3> * Formatez une chaîne de caractères avec <strong>sprintf</strong> * </h3>

    <p>
        <?php $recipe = [
            'title' => 'salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'laurene.castor@exemple.com',
        ];

        echo sprintf(
            '%s par "%s" : %s',
            $recipe['title'],
            $recipe['author'],
            $recipe['recipe']
        );
        ?>
    </p>
    <h3> * La date avec <strong>date</strong> * </h3>
    <p>
        <?php
        $year = date('Y');
        echo $year; ?>
        <br>
        <?php
        // Enregistrons les informations de date dans des variables

        $day = date('d');
        $month = date('m');
        $year = date('Y');

        $hour = date('H');
        $minut = date('i');

        // Maintenant on peut afficher ce qu'on a recueilli
        echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour . ' h ' . $minut;
        ?>
    </p>
    <h2>*** CREER VOS PROPRES FONCTIONS ***</h2>
    <br>
    <h3>Exemple 1 : vérifiez la validité d'une recette</h3>
    <P>
        <?php
        $recipe = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => true,
        ];

        // au minimum
        if ($recipe['is_enabled']) {
            return true;
        } else {
            return false;
        }

        // mieux
        $isEnabled = $recipe['is_enabled'];

        // Encore mieux
        if (array_key_exists('is_enabled', $recipe)) {
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }
        ?>
    </P>
    <p>
        <?php
        //Fonction créée :

        function isValidRecipe1(array $recipe): bool
        {
            if (array_key_exists('is_enabled', $recipe)) {
                $isEnabled = $recipe['is_enabled'];
            } else {
                $isEnabled = false;
            }
            return $isEnabled;
        }
        ?>
    </p>
    <p>
        <?php

        // 2 exemples
        $romanSalad = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => true,
        ];

        $sushis = [
            'title' => 'Sushis',
            'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ];


        //reponds TRUE

        $isRomanSaladValid = isValidRecipe1($romanSalad);

        //Répond FALSE
        $isSushisValid = isValidRecipe1($sushis);



        ?>
    </p>


    <h3>Exemple 2 : recuperer des recettes valides</h3>
    <P>
        <?php

        $recipes = [
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

        //AVANT
        foreach ($recipes as $recipe) {
            if ($recipe['is_enabled']) {
                echo $recipe['title'];
            }
        }

        // APRES

        function getRecipes2(array $recipes): array
        {
            $validRecipes = [];

            foreach ($recipes as $recipe) {
                if (isValidRecipe($recipe)) {
                    $validRecipes[] = $recipe;
                }
            }

            return $validRecipes;
        }

        // construire l'affichage HTML des recettes
        foreach (getRecipes2($recipes) as $recipe) {
            echo $recipe['title'];
        }
        ?>
    </P>
    <h3>Exemple 3 : recuperer le nom d'un utilisateur en fonction du mail</h3>
    <P>
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
                'full_name' => 'Cle Legrand',
                'email' => 'clealegrand@exemple.com',
                'age' => 7,
            ],
        ];

        $recipes3 = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'remylegrand@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'clealegrand@exemple.com',
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
                'author' => 'younalegrand@exemple.com',
                'is_enabled' => false,
            ],
        ];

        function displayAuthor(string $authorEmail, array $users): string
        {
            for ($i = 0; $i < count($users); $i++) {
                $author = $users[$i];
                if ($authorEmail === $author['email']) {
                    return $author['full_name'] . '(' . $author['age'] . 'ans)';
                }
            }
        }

        function isValidRecipe3(array $recipe3): bool
        {
            if (array_key_exists('is_enabled', $recipe3)) {
                $isEnabled = $recipe3['is_enabled'];
            } else {
                $isEnabled = false;
            }

            return $isEnabled;
        }

        function getRecipes3(array $recipes3): array
        {
            $valid_recipes3 = [];

            foreach ($recipes3 as $recipe3) {
                if (isValidRecipe3($recipe3)) {
                    $valid_recipes3[] = $recipe3;
                }
            }

            return $valid_recipes3;
        }

        ?>
    <h2>Liste des recettes de cuisine</h2>

    <?php foreach (getRecipes3($recipes3) as $recipe3) : ?>
    <article>
        <h3><?php echo $recipe3['title']; ?></h3>
        <div><?php echo $recipe3['recipe']; ?></div>
        <i><?php echo displayAuthor($recipe3['author'], $users); ?></i>
    </article>
    <?php endforeach ?>
    </P>
</body>

</html>
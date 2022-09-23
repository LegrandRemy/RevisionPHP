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
        allowRecipe();<br>
        Comme vous le voyez, j'ai simplement écrit le nom de la fonction, suivi de parenthèses vides, puis de
        l'inévitable point-virgule. En faisant cela, j'appelle la fonction allowRecipe mais je ne lui envoie aucune
        information, aucun paramètre.

        Certaines fonctions peuvent fonctionner sans paramètres, mais elles sont assez rares. Dans le cas de allowRecipe
        , ça n'a pas de sens de l'appeler sans lui donner la recette nécessaire pour décider !

        Si on veut lui envoyer un paramètre (un nombre, une chaîne de caractères, un booléen...), il faut l'écrire entre
        les parenthèses :
        <br>
        /**
        * Il n'est pas nécessaire de déclarer une variable $recipe
        * pour passer l'information en tant que paramètre d'une fonction.
        */<br>
        allowRecipe([<br>
        'title' => 'Escalope milanaise',<br>
        'recipe' => '',<br>
        'author' => 'mathieu.nebra@exemple.com',<br>
        'is_enabled' => true,<br>
        ]);<br>
        Ainsi, allowRecipe saura qu'elle doit travailler avec le tableau PHP passé en paramètre.

        Souvent, les fonctions acceptent plusieurs paramètres. Vous devez dans ce cas les séparer par des virgules :
        <br>
        fonctionImaginaire(17, 'Vert', true, 41.7);<br>
        Cette fonction recevra quatre paramètres :

        17 ;

        le texte « Vert » ;

        le booléen Vrai ;

        et le nombre 41,7.
    </p>





</body>

</html>
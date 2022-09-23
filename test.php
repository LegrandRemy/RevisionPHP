<!DOCTYPE html>
<html>

<head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>

<body>
    <h2>Page de test</h2>

    <p>
        Cette page contient du code HTML avec des balises PHP.<br />
        <?php /* Insérer du code PHP ici */ ?>
        Voici quelques petits tests :
    </p>

    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>

    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    </p>
    <h1>Ma page web</h1>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    <?php
    echo "J'habite en France."; // Cette ligne indique où j'habite
    ?><br />
    <p>
        *** Les types de données ***<br />
        <?php
        // La ligne suivante indique mon âge
        echo "J'ai 36 ans.";

        /* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o)
echo "J'ai 92 ans.";*/

        $userAge = 17; // La variable est créée et vaut 17
        $userAge = 23; // La variable est modifiée et vaut 23
        $userAge = 36; // La variable est modifiée et vaut 36 // int
        $fullName = "Rémy Legrand"; // string
        $email = 'legrandremy19@outlook.fr'; // string
        $price = 50.2; // float
        $isAuthor = true; // boolean
        $isAdmin = false; //booleen
        $noValue = NULL; // null

        //cconcatenationtion guillemets simple et double
        //guillemets simples avec un .
        echo 'je m\'appelle : ' . $fullName ?></p>
    <p><?php echo "Ton email est $email , bienvenue sur le site"
        ?></p>
    <p>
        *** Calculs simples ***<br />

        <?php $number = 2 + 4; //$number prend la valeur 6
        $number = 5 - 1; // $number prend la valeur 4
        $number = 3 * 5; //$number prend la valeur 15
        $number = 10 / 2; // $number prend la valeur 5
        $number = 3 * 5 + 1; // $number prend la valeur 16
        $number = (1 + 2) * 2; // $number prend la valeur6

        $number = 10;
        $result = ($number + 5) * $number; // $result prend la valeur 150

        //le modulo
        $number = 10 % 5; //$number prend la valeur 0
        $number = 10 % 3; //$number prend la 1
        ?></p>
    <p>
        *** LES CONDITIONS ***<br />

        <?php
        //LES CONDITIONS
        $isEnabled = true; // la condition d'accès

        if ($isEnabled == true) {
            echo "vous etes autorisé à accéder au site";
        } else {
            echo "acces refusé";
        }
        ?>
    </p>
    <p>
        <?php
        // si la variables est vide on rentre dans le else
        $isAllowedToEnter = "";

        // SI on a l'autorisation d'entrer
        if ($isAllowedToEnter == "Oui") {
            // instructions à exécuter quand on est autorisé à entrer
        } // SINON SI on n'a pas l'autorisation d'entrer
        elseif ($isAllowedToEnter == "Non") {
            // instructions à exécuter quand on n'est pas autorisé à entrer
        } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        else {
            echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
        }
        ?>
    </p>
    <p>
        *** Conditions avec booléens ***<br>
        <?php
        $isAllowedToEnter = true;

        // SI autorisé
        if ($isAllowedToEnter) {
            echo "Bienvenue petit nouveau. :o)";
        }
        // si pas autorisé ... on met le point d'exlamation
        // if (!$isAllowedToEnter) {}
        else {
            echo "T'as pas le droit d'entrer !";
        }
        ?>
    </p>
    <p>* Conditions multiples <br>
    <p>**Avec &&</p>
    <?php
    $isEnabled = true;
    $isOwner = false;

    if ($isEnabled && $isOwner) {
        echo 'Accès validé ';
    } else {
        echo 'Accès à la recette interdit';
    }
    ?>
    <p>*** Avec || ***</p>
    <?php
    $isEnabled = true;
    $isOwner = true;
    $isAdmin = false;

    if ($isEnabled && $isOwner || $isAdmin) {
        echo 'Accès validé ';
    } else {
        echo 'Accès à la recette interdit';
    }
    ?>

    </p>
    <p>
        <?php
        $chickenRecipesEnabled = true;

        if ($chickenRecipesEnabled) {
            echo '<h1>Liste des recettes à base de poulet</h1>';
        }
        ?>
    </p>
    <p><?php $chickenRecipesEnabled = true; ?>

        <?php if ($chickenRecipesEnabled) : ?>
        <!-- Ne pas oublier le ":" -->

    <h1>Liste des recettes à base de poulet</h1>

    <?php endif; ?>
    <!-- Ni le ";" après le endif -->
    </p>

    <p>
        <?php
    $grade = 16;

    switch ($grade) // on indique sur quelle variable on travaille
    {
        case 0: // dans le cas où $grade vaut 0
            echo "Tu es vraiment un gros nul !!!";
            break; // break demande a php de sortir du switch

        case 5: // dans le cas où $grade vaut 5
            echo "Tu es très mauvais";
            break;

        case 7: // dans le cas où $grade vaut 7
            echo "Tu es mauvais";
            break;

        case 10: // etc. etc.
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
            break;

        case 12:
            echo "Tu es assez bon";
            break;

        case 16:
            echo "Tu te débrouilles très bien !";
            break;

        case 20:
            echo "Excellent travail, c'est parfait !";
            break;

        default: // default est un peu l'equivalent de echo
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
    ?>

    </p>
    <p>---------------------------------------------------------------- <br>*** Les ternaires ***
        <br>---------------------------------------------------------------- <br>
    </p>
    <p>
        <?php
    $userAge = 24;

    if ($userAge >= 18) {
        $isAdult = true;
    } else {
        $isAdult = false;
    }
    ?>
    </p>
    <p>
        <?php
    $userAge = 7;

    $isAdult = ($userAge >= 18) ? true : false;

    // Ou mieux, dans ce cas précis
    $isAdult = ($userAge >= 18);
    ?>
    </p>

    <p>---------------------------------------------------------------- <br>
        *** LES BOUCLES *** <br>
        ---------------------------------------------------------------- <br>
    </p>
    <p>
        *Tableaux* <br>------------ <br>
    </p>
    <p>
        <?php

    // Premier utilisateur
    $userName1 = 'remy legrand';
    $userEmail1 = 'remylegrand@exemple.com';
    $userPassword1 = 'S3cr3t';
    $userAge1 = 36;

    // Deuxième utilisatrice
    $userName2 = 'eve dermigny';
    $userEmail2 = 'evedermigny@exemple.com';
    $userPassword2 = 'P4ssW0rD';
    $userAge2 = 35;

    // ... et ainsi de suite pour les autres utilisateurs.
    ?>
    </p>
    <p><?php

    $user1 = ['remy legrand', 'email', 'S3cr3t', 36];

    echo $user1[0]; // "remy legrand"
    echo $user1[1]; // "email"
    echo $user1[3]; // 36 
    ?>
    </p>
    <p>
        <?php

    $remy = ['remy legrand', 'remylegrand@exemple.com', 'S3cr3t', 36];
    $eve = ['eve dermigny', 'evedermigny@exemple.com', 'devine', 35];
    $clea = ['clea legrand', 'clealegrand@exemple.com', 'P4ssw0rD', 7];

    $users = [$remy, $eve, $clea];

    echo $users[1][1]; // "evedermigny@exemple.com" 
    ?>
    </p>
    <p>---------------------------------------------------------------- <br>
        * La boucle WHILE * <br>
        ---------------------------------------------------------------- <br>
        <?php
    $lines = 1;

    // tant que $sline est inferieur ou egal a 5 
    while ($lines <= 5) {
        echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
        $lines++; // $lines = $lines + 1
    }
    /*Dans cette boucle, il y a deux instructions :

echo permet d'afficher du texte en PHP. À noter qu'il y a une balise HTML <br />  à la fin : cela permet d'aller à la ligne (vu que vous connaissez le HTML, ça n'a rien de surprenant : chaque phrase sera écrite sur une seule ligne).

$lines++; est une façon plus courte d'ajouter 1 à la variable. On appelle cela l'incrémentation (ce nom barbare signifie tout simplement que l'on a ajouté 1 à la variable).
*/
    ?>
    </p>
    <p>
        <?php
    $lines = 1;
    while ($lines <= 10) {
        echo 'Ceci est la ligne n°' . $lines . '<br />';
        $lines++;
    }
    ?>

        <!--

Ceci est la ligne n°1
Ceci est la ligne n°2
...
-->
    </p>
    <p>
        * pour un tablau de tableau * <br>
        ---------------------------------- <br>
        <?php

    $lines = 3; // nombre d'utilisateurs dans le tableau
    $counter = 0;

    while ($counter < $lines) {
        echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
        $counter++; // Ne surtout pas oublier la condition de sortie !
    } ?>
    </p>
    <p>---------------------------------------------------------------- <br>
        * La boucle FOR * <br>
        ---------------------------------------------------------------- <br>
        <?php
    for ($lines = 0; $lines <= 2; $lines++) {
        echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
    }
    /*Après le mot for  , il y a des parenthèses qui contiennent trois éléments, séparés par des 
    points-virgules ;  :

Le premier sert à l'initialisation. C'est la valeur que l'on donne au départ à la variable 
(ici, elle vaut 0).

Le second, c'est la condition. Comme pour le while : tant que la condition est remplie, 
la boucle est réexécutée. 
Dès que la condition ne l'est plus, on en sort.

Enfin, le troisième c'est l'incrémentation. Cela permet d'ajouter 1 à la variable à chaque tour 
de boucle.
while  est plus simple et plus flexible : on peut faire tous les types de boucles avec, mais on 
peut oublier de faire certaines étapes, comme l'incrémentation de la variable.

for  est bien adapté quand on doit compter le nombre de fois que l'on répète les instructions, et 
il permet de ne pas oublier de faire l'incrémentation pour augmenter la valeur de la variable !

Si vous hésitez entre les deux, il suffit simplement de vous poser la question suivante : 
« Est-ce que je sais d'avance combien de fois je veux que mes instructions soient répétées ? ».

Si la réponse est oui, alors la boucle for  est tout indiquée.

Sinon, alors il vaut mieux utiliser la boucle while .*/ ?></p>

    <p>
        ---------------------------------------------------------------- <br>
        * La boucle FOREACH * : Plus adaptée aux tableaux <br>
        ---------------------------------------------------------------- <br>
        <?php

    // Déclaration du tableau des recettes
    $recipes = [
        ['Cassoulet', '[...]', 'remylegrand@exemple.com', true,],
        ['Couscous', '[...]', 'remylegrand@exemple.com', false,],
    ];

    foreach ($recipes as $recipe) {
        echo $recipe[0]; // Affichera Cassoulet, puis Couscous
    } ?>
        <!-- voir testBoucle -->
    </p>
</body>

</html>
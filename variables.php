<?php

// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}

//Si le cookie est présent
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
    ];
} else {
    $loggedUser = null;
};

$rootPath = $_SERVER['DOCUMENT_ROOT'];
$rootUrl = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/tests' . '/';

//variables.php

// $users = [
//     [
//         'full_name' => 'Rémy Legrand',
//         'email' => 'legrandremy19@outlook.fr',
//         'age' => 36,
//         'password' => 'remy'
//     ],
//     [
//         'full_name' => 'Eve Dermigny',
//         'email' => 'evedermigny@exemple.com',
//         'age' => 35,
//         'password' => 'remyu'
//     ],
//     [
//         'full_name' => 'Clea Legrand',
//         'email' => 'clealegrand@exemple.com',
//         'age' => 7,
//         'password' => 'remyui'
//     ],
// ];

// $recipes = [
//     [
//         'title' => 'Cassoulet',
//         'recipe' => '',
//         'author' => 'legrandremy19@outlook.fr',
//         'is_enabled' => true,
//     ],
//     [
//         'title' => 'Couscous',
//         'recipe' => '',
//         'author' => 'clealegrand@exemple.com',
//         'is_enabled' => true,
//     ],
//     [
//         'title' => 'Escalope milanaise',
//         'recipe' => '',
//         'author' => 'evedermigny@exemple.com',
//         'is_enabled' => true,
//     ],
//     [
//         'title' => 'Salade Romaine',
//         'recipe' => '',
//         'author' => 'legrandremy19@outlook.fr',
//         'is_enabled' => true,
//     ],
// ];
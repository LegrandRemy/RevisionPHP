<?php

// On démarre la session
session_start();

// Supression des variables de session et de la session

$_SESSION = array();
session_destroy();
// Supression des cookies de connexion automatique
setcookie('login', '',);
setcookie('pass_hache', '');

header('Location: /tests/home.php');
var_dump($loggedUser);
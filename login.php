<?php
$postData = $_POST;

//Validation du formaulaire
if (isset($postData['email']) && isset($postData['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $postData['email'] &&
            $user['password'] === $postData['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
                'full_name' => $user['full_name'],
            ];


            /**
             * Cookie qui expire dans un an
             */
            // setcookie(
            //     'LOGGED_USER',
            //     $loggedUser['email'],
            //     $loggedUser['full_name'],
            //     [
            //         'expires' => time() + 365 * 24 * 3600,
            //         'secure' => true,
            //         'httponly' => true,
            //     ]
            // );

            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
            $_SESSION['LOGGED_USERNAME'] = $loggedUser['full_name'];
        } else {
            $errorMessage = sprintf(
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $postData['email'],
                $postData['password']
            );
        }
    }
}
// Si le cookie ou la session sont présentes
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER'],
        'full_name' => $_SESSION['LOGGED_USERNAME']
    ];
}
?>
<!-- 
    Si utilisateur est non identifié, on affiche le formulaire 
-->
<?php if (!isset($loggedUser)) : ?>

<form action="home.php" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if (isset($errorMessage)) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo ($errorMessage); ?>
    </div>
    <?php endif; ?>

    <div class="mb3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help"
            placeholder="remylegrand@exemple.fr">
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>

</form>
<!-- 
    Si utilisateur bien connectée on affiche un message de succès
-->
<?php else : ?>

<?php endif; ?>
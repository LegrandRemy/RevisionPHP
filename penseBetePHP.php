<!-- Declaration de variables -->
<?php
$prenom = "Pierre";
$age = 28;

echo $prenom;
?>
<?php
$prenom = "Pierre";
$age = 28; //$age stocke le nombre 28

echo "La variable \$age contient : ";
echo $age;
echo "<br>";

$age = 29; //$age stocke le nombre 29
echo "La variable \$age contient : ";
echo $age;
?>
<!-- 
*** Les variables en PHP vont pouvoir stocker 8 grands types de données différents :
Le type « chaine de caractères » ou String en anglais ;
Le type « nombre entier » ou Integer en anglais ;
Le type « nombre décimal » ou Float en anglais ;
Le type « booléen » ou Boolean en anglais ;
Le type « tableau » ou Array en anglais ;
Le type « objet » ou Object en anglais ;
Le type « NULL » qui se dit également NULL en anglais ;
Le type « ressource » ou Resource en anglais ; 
-->

<!-- ***Le type chaîne de caractères ou String -->
<?php
$prez = "Je m'appelle Pierre";
$age = 28; //Stocke le nombre 28
$age2 = "28"; //Stocke la chaine de caractères "28"

echo "La variable \$age contient une valeur de type ";
echo gettype($age);

echo "<br>La variable \$age2 contient une valeur de type ";
echo gettype($age2);
?>

<!-- *** Les types de données nombre entier (Integer) et nombre décimal (Float ou Double) -->
<?php
$prez = "Je m'appelle Pierre";
$age = 28; //Stocke le nombre 28
$age2 = "28"; //Stocke la chaine de caractères "28"
$distance = 2.84;

echo "La variable \$age contient une valeur de type ";
echo gettype($age);

echo "<br>La variable \$distance contient une valeur de type ";
echo gettype($distance);
?>

<!-- *** Le type de données booléen (Boolean) -->
<?php
$prez = "Je m'appelle Pierre";
$age = 28; //Stocke le nombre 28
$age2 = "28"; //Stocke la chaine de caractères "28"
$distance = 2.84;
$vrai = true;
$faux = false;

echo "La variable \$vrai contient une valeur de type ";
echo gettype($vrai);

echo "<br>La variable \$faux contient une valeur de type ";
echo gettype($faux);
?>

<!-- *** Le type de données Null -->
<?php
$prez = "Je m'appelle Pierre";
$age = 28; //Stocke le nombre 28
$age2 = "28"; //Stocke la chaine de caractères "28"
$distance = 2.84;
$vrai = true;
$faux = false;
$vide = NULL;
$vide2;

echo "La variable \$vide contient une valeur de type ";
echo gettype($vide);

echo "<br>La variable \$vide2 contient une valeur de type ";
echo gettype($vide2);
?>

<!-- Voici ci-dessous les différents opérateurs de comparaison disponibles en PHP ainsi que leur signification :

Opérateur	    Définition
==	            Permet de tester l’égalité sur les valeurs
===	            Permet de tester l’égalité en termes de valeurs et de types
!=	            Permet de tester la différence en valeurs
<>	            Permet également de tester la différence en valeurs
!==	            Permet de tester la différence en valeurs ou en types
<	            Permet de tester si une valeur est strictement inférieure à une autre
>	            Permet de tester si une valeur est strictement supérieure à une autre
<=	            Permet de tester si une valeur est inférieure ou égale à une autre
>=	            Permet de tester si une valeur est supérieure ou égale à une autre -->

<?php
$x = 4; //On affecte la valeur 4 à $x

/*On compare la valeur contenue dans $x à 4 en valeur.
             *On renvoie le résultat de la comparaison grâce à var_dump()*/
var_dump($x == 4);
echo '<br>';

var_dump($x > 7);
echo '<br>';

/*On compare la valeur de $x à la chaine de caractères "4" en
             *valeur simplement*/
var_dump($x == "4");
echo '<br>';

/*On compare la valeur de $x à la chaine de caractères "4" en
             *termes de valeur et de type*/
var_dump($x === "4");
echo '<br>';

var_dump($x != "4");
echo '<br>';

var_dump($x !== "4");
echo '<br>';
?>

<!-- *** les conditions -->
<?php
$x = 4; //On affecte la valeur 4 à $x
$y = 2; //On affecte la valeur 2 à $y

if ($x > 1) {
    echo '$x contient une valeur supérieure à 1';
}

if ($x == $y) {
    echo '$x et $y contiennent la même valeur';
}
?>

<?php
$x = 4; //On affecte la valeur 4 à $x
$y = 2; //On affecte la valeur 2 à $y

if ($x > 1) {
    echo '$x contient une valeur stric. supérieure à 1 <br>';
} else {
    echo '$x contient une valeur inférieure ou égale à 1 <br>';
}

if ($x == $y) {
    echo '$x et $y contiennent la même valeur <br>';
} else {
    echo '$x et $y contiennent des valeurs différentes <br>';
}
?>

<?php
$x = 4; //On affecte la valeur 4 à $x
$y = -12; //On affecte la valeur -12 à $y

if ($x >= 0 and $x <= 5) {
    echo '$x contient une valeur entre 0 et 5 <br>';
}

if ($x >= 0 and $y >= 0) {
    echo '$x et $y contiennent une valeur positive <br>';
}

if ($x >= 0 or $y >= 0) {
    echo '$x ou $y (ou les deux) contient une valeur positive <br>';
}

if ($x >= 0 xor $y >= 0) {
    echo '$x ou $y contient une valeur positive mais pas les deux';
}
?>

<?php
$x = 4; //On affecte la valeur 4 à $x

//Ecrire ceci :
if ($x >= 0) {
    echo '$x stocke un nombre positif<br>';
} else {
    echo '$x stocke un nombre négatif<br>';
}

//Est equivalent à cela :
echo $x >= 0 ? '$x stocke un nb positif' : '$x stocke un nb négatif';
?>

<!-- *** SWITCH CASE -->

<?php
$x = 2;

switch ($x) {
    case 0:
        echo '$x stocke la valeur 0';
        break;
    case 1:
        echo '$x stocke la valeur 1';
        break;
    case 2:
        echo '$x stocke la valeur 2';
        break;
    case 3:
        echo '$x stocke la valeur 3';
        break;
    case 4:
        echo '$x stocke la valeur 4';
        break;
    default:
        echo '$x ne stocke pas de valeur entre 0 et 4';
}
?>

<!-- *** Les boucles    -->
<?php
$x = 0;

while ($x <= 10) {
    echo '$x contient la valeur ' . $x . '<br>';
    $x++;
}
?>
<?php
for ($x = 0; $x <= 5; $x++) {
    echo '$x contient la valeur ' . $x . '<br>';
}
?>
<!-- *** Include et Require 
La différence entre les instructions include et require et leurs variantes 
include_once et require_once est qu’on va pouvoir inclure plusieurs fois un même fichier 
avec include et require tandis qu’en utilisant include_once et require_once cela ne sera pas 
possible : un même fichier ne pourra être inclus qu’une seule fois dans un autre fichier.-->
<?php
echo '<h2>Menu inclus avec include</h2> <br>';
include 'menu.php';
include 'menu.php';

echo '<h2>Menu inclus avec include_once</h2> <br>';
include_once 'menu.php';

echo '<h2>Menu inclus avec require</h2> <br>';
require 'menu.php';
require 'menu.php';

echo '<h2>Menu inclus avec require_once</h2> <br>';
require_once 'menu.php';
?>

<!-- *** Les fonctions -->
<?php
function bonjour()
{
    echo 'Bonjour à tous <br>';
}
bonjour();
bonjour();
bonjour();
?>
<?php
$prenom = 'Pierre';
$x = 4;
$y = 5;

function bonjour($p)
{
    echo 'Bonjour ' . $p . '<br>';
}

function addition($p1, $p2)
{
    echo $p1 . ' + ' . $p2 . ' = ' . ($p1 + $p2) . '<br>';
}

bonjour($prenom);
bonjour('Mathilde');
addition($x, $y);
addition(1, 1);
?>
<?php
$x = 0;

function plus3($p)
{
    $p = $p + 3;
    echo 'Valeur dans la fonction : ' . $p;
}

plus3($x);
echo '<br>Valeur en dehors de la fonction : ' . $x;
?>
<?php
function bonjour($prenom, $role = 'abonné(e)')
{
    echo 'Bonjour ' . $prenom . ' vous êtes un(e) ' . $role . '.<br>';
}

bonjour('Mathilde');
bonjour('Pierre', 'administrateur');
?>
<?php
function bonjour(...$prenoms)
{
    foreach ($prenoms as $p) {
        echo 'Bonjour ' . $p . '<br>';
    }
}

bonjour('Mathilde', 'Pierre', 'Victor');
?>
<!-- *** Le typage des arguments 
    Les types valides sont les suivants :

Type	    Définition
string	    L’argument passé doit être de type string (chaine de caractères)
int	        L’argument passé doit être de type integer (nombre entier)
float	    L’argument passé doit être de type float ou double (nombre décimal)
bool	    L’argument passé doit être de type boolean (booléen)
array	    L’argument passé doit être de type array (tableau)
iterable	L’argument passé doit être de type array (tableau) ou une instance de l’interface Traversable
callable	L’argument passé doit être de type callable (fonction de rappel)
Nom de classe / d’interface	L’argument passé doit être une instance de la classe ou de l’interface donnée
self	    L’argument passé doit être une instance de la même classe qui a défini la méthode
object	    L’argument passé doit être de type object (objet)-->
<?php
function test($a, $b)
{
    echo $a . ' + ' . $b . ' = ' . ($a + $b) . '<br>';
}

function addition(float $a, float $b)
{
    echo $a . ' + ' . $b . ' = ' . ($a + $b) . '<br>';
}

test(3, 4);
test(3, '4Pierre'); //'4Pierre' est converti en 4 par PHP
test(3, 'Pierre'); //'Pierre' est converti en 0 par PHP
addition(3, 4);
addition(3, 4.5);
addition(3.5, 4.2);
addition(3, '4Pierre'); //'4Pierre' est converti en 4 par PHP
addition(3, 'Pierre'); //Renvoie une erreur qui termine l'exécution

//Nous étudierons les erreurs plus tard dans le cours
echo 'Ce message ne s\'affichera pas ';
?>

<!-- *** Le return -->
<?php
/*Note : l'opérateur "*" a une priorité plus grande que "."
             *pas besoin de () ici donc pour faire le calcul*/
function multecho(float $a, float $b)
{
    echo $a . ' * ' . $b . ' = ' . $a * $b . '<br>';
}

function multreturn(float $a, float $b)
{
    return $a . ' * ' . $b . ' = ' . $a * $b . '<br>';
}

multecho(2, 3);
multreturn(4, 5);
?>
<?php
function multreturn($a, $b): int
{
    return $a * $b;
}

echo multreturn(2, 4);
echo '<br><br>';
echo multreturn(2, 4.1);
?>
<?php
$x = 10;

function portee1()
{
    echo 'La valeur de $x globale est : ' . $x . '<br>';
}
function portee2()
{
    $x = 5;
    echo 'La valeur de $x locale est : ' . $x . '<br>';
}
function portee3()
{
    $y = 0;
    $y++;
    echo '$y contient la valeur : ' . $y . '<br>';
}
function portee4()
{
    $z = 1;
}
portee1();
portee2();
portee3();
portee3();
portee4();
echo 'La variable locale $z contient : ' . $z;
?>
<?php
$x = 10;

function portee()
{
    global $x;
    echo 'La valeur de $x globale est : ' . $x . '<br>';
    $x = $x + 5; //On ajoute 5 à la valeur de $x
}

portee();
echo '$x contient maintenant : ' . $x;
?>
<?php
function portee()
{
    $y = 5;
    echo 'Valeur de $y (depuis la fonction) :' . $y . '<br>';
}

function portee2()
{
    $z = 5;
    return $z;
}

portee();
echo 'Valeur de $y (depuis l\'espace global) : ' . $y . '<br>';

$a = portee2(); //On stocke la valeur renvoyée par portee2() dans $a
echo '$z contient la valeur : ' . $a;
?>
<?php
function compteur()
{
    static $x = 0;
    echo '$x contient la valeur : ' . $x . '<br>';
    $x++;
}

compteur();
compteur();
compteur();
compteur();
compteur();
?>
<!-- *** Les tableaux -->
<!-- * Creation tableaux Numérotés -->
<?php
$prenoms = array('Mathilde', 'Pierre', 'Amandine', 'Florian');
$ages = [27, 29, 21, 29];
?>
<?php
$prenoms[0] = 'Mathilde';
$prenoms[1] = 'Pierre';
$prenoms[2] = 'Amandine';
$prenoms[3] = 'Florian';

$ages[0] = 27;
$ages[1] = 29;
$ages[2] = 21;
$ages[3] = 29;
?>
<!-- * Affichage valeurs tableaux numérotés -->
<?php
$prenoms = ['Mathilde', 'Pierre', 'Amandine', 'Florian'];

echo $prenoms[0] . '<br>';
echo $prenoms[2];
?>
<?php
$prenoms = ['Mathilde', 'Pierre', 'Amandine', 'Florian'];

//On récupère la taille du tableau et on la stocke dans $taille
$taille = count($prenoms);

//On peut soit parcourir le tableau et afficher les valeurs une à une
for ($i = 0; $i < $taille; $i++) {
    echo $prenoms[$i] . ', ';
}

echo '<br><br>';

//...soit les stocker dans une autre variable et echo cette variable
for ($i = 0; $i < $taille; $i++) {
    $p .= $prenoms[$i] . ', ';
}
echo $p;
?>
<?php
$prenoms = ['Mathilde', 'Pierre', 'Amandine', 'Florian'];

//On rajoute une valeur à $prenoms et on lui associe la clef 8
$prenoms[8] = 'Lisa';

$taille = count($prenoms);

/*On tente d'afficher les valeurs de notre tableau en utilisant le
             *résultat de count() et en bouclant sur les indices*/
for ($i = 0; $i < $taille; $i++) {
    $p .= $prenoms[$i] . ', ';
}
echo $p . '<br><br>';

//On utilise une boucle foreach ($tableau as $valeurs)
foreach ($prenoms as $valeurs) {
    $resultat .= $valeurs . ', ';
}
echo $resultat;
?>

<!-- * Créer un tableau associatif -->
<?php
$ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];

$mails['Mathilde'] = 'math@gmail.com';
$mails['Pierre'] = 'pierre.giraud@edhec.com';
$mails['Amandine'] = 'amandine@lp.fr';
?>

<!-- * Récupérer et afficher les valeurs d’un tableau associatif -->
<?php
$ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];

/*Identique à
             *$ages = array('Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21);
             */

$mails['Mathilde'] = 'math@gmail.com';
$mails['Pierre'] = 'pierre.giraud@edhec.com';
$mails['Amandine'] = 'amandine@lp.fr';

foreach ($ages as $clef => $valeur) {
    echo $clef . ' a ' . $valeur . ' ans<br>';
}
?>

<!-- * Définition des tableaux multidimensionnels    -->
<?php
/*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

/*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

/*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
]
?>

<!-- * Récupérer ou afficher une valeur en particulier d’un tableau multidimensionnel -->
<?php
/*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

/*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

/*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

//$sous_suite = [1, 2, 4, 8, 16]
$sous_suite = $suite[0];
echo $sous_suite[0] . '<br>' . $sous_suite[2] . '<br>';

//$sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr']
$sous_util = $utilisateurs[2];
echo $sous_util['nom'] . '<br>';

//$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
$sous_produits = $produits['Livre'];
echo $sous_produits['prix'];
?>
<!-- Pareil que : -->
<?php
/*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

/*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

/*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

echo $suite[0][0] . '<br>' . $suite[0][2] . '<br>';
echo $utilisateurs[2]['nom'] . '<br>';
//Affichage d'une valeur simple contenue directement dans $utilisateurs
echo $utilisateurs[3] . '<br>';
echo $produits['Livre']['prix'];
?>

<!-- * Parcourir et afficher les valeurs d’un tableau multidimensionnel -->
<?php
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
];
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];
foreach ($suite as $suitenb => $n) {
    echo 'Suite ' . ($suitenb + 1) . ' : ';
    foreach ($n as $ni => $nn) {
        echo $nn . ', ';
    }
    echo '<br><br>';
}
foreach ($utilisateurs as $nb => $infos) {
    echo 'Utilisateur n°' . ($nb + 1) . ' :<br>';
    foreach ($infos as $c => $v) {
        echo $c . ' : ' . $v . '<br>';
    }
    echo '<br>';
}
foreach ($produits as $clef => $produit) {
    echo 'Produit : ' . $clef . '<br>';
    foreach ($produit as $caracteristique => $valeur) {
        echo $caracteristique . ' : ' . $valeur . '<br>';
    }
    echo '<br>';
}
// Ici, nos trois tableaux sont trois tableaux à deux dimensions. Nous allons donc utiliser
//  deux boucles foreach à chaque fois. La première boucle foreach notre premier tableau 
//  $suite va nous servir à accéder aux éléments de ce tableau multidimensionnel, 
//  c’est-à-dire aux deux clefs numérotées et aux deux valeurs qui sont des tableaux. 
//  On echo déjà à partir de cette première boucle le numéro de la suite qui va être 
//  affichée en rajoutant 1 à la valeur de son index (puisque les index numérotés 
//  commencent à 0).
// Lors du premier passage dans cette première boucle foreach, on va donc accéder 
// à notre première suite et on va echo « Suite 1 : » et rentrer dans notre deuxième 
// boucle foreach. Cette deuxième boucle foreach va parcourir le 
// sous tableau [1, 2, 4, 8, 16] et echo les différentes valeurs du tableau à chaque fois.
?>
<!-- * Afficher rapidement la structure d’un tableau en PHP avec var_dump()-->
<?php
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
];
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

echo '<pre>';
print_r($produits);
var_dump($produits);
echo '</pre>';
?>

<!-- *** Le Timestamp nombre de seconde ecoulées depuis 1970 a minuit -->
<?php
echo 'Timestamp actuel : ' . time() . '<br>';
?>

<!-- Obtenir le Timestamp d’une date donnée en PHP
Pour obtenir le Timestamp UNIX lié à une date donnée, nous allons pouvoir utiliser 
la fonction mktime() qui retourne le Timestamp UNIX d’une date ou la fonction gmmktime() 
qui retourne le Timestamp UNIX d’une date GMT.      -->
<?php
echo 'Timestamp actuel : ' . time() . '<br>';
echo 'Timestamp actuel (avec mktime()) : ' . mktime() . '<br>';
$t1 = mktime(8, 30, 0, 1, 25, 2019);
$gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' . $t1 . '<br>';
echo 'Timestamp 25 janvier 2019 08h30 (GMT) : ' . $gmt1 . '<br>';
?>

<!-- mm/dd/y (mois/jour/année). Ex : 1/25/19, 1/25/2019 ;
y-mm-dd (anné-mois-jour). Ex : 19-01-25, 2019-01-25 ;
dd-mm-yy (jour-mois-année). Ex : 25-01-2019 ;
dd-mois y (jour-mois textuel année). Ex : 25-January 2019 ;
mois dd, y (mois textuel jour, année). Ex : January 25, 2019 ; -->
<?php
echo 'Timestamp actuel : ' . time() . '<br>';
$t1 = mktime(8, 30, 0, 1, 25, 2019);
$gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' . $t1 . '<br>';
echo 'Timestamp 25 janvier 2019 08h30 (GMT) : ' . $gmt1 . '<br>';

$stt1 = strtotime('2019/01/25 08:30:00');
$stt2 = strtotime('2019/01/25');
$stt3 = strtotime('next friday');
$stt4 = strtotime('2 days ago');
$stt5 = strtotime('+1 day');

echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' . $stt1 . '<br>';
echo 'Timestamp 25 janvier 2019 minuit (GMT+1) : ' . $stt2 . '<br>';
echo 'Timestamp vendredi 1 février minuit (GMT+1) : ' . $stt3 . '<br>';
echo 'Timestamp il y a 48h : ' . $stt4 . '<br>';
echo 'Timestamp dans 24h : ' . $stt5;
?>
<!-- Obtenir une date à partir d’un Timestamp en PHP  -->
<?php
echo 'Timestamp actuel : ' . time() . '<br>';
$stt = strtotime('2019-01-25');
echo 'Timestamp 25 janvier 2019 minuit (GMT+1) : ' . $stt . '<br>';

echo '<pre>';
print_r(getdate());
echo '</pre><br>';

echo '<pre>';
print_r(getdate($stt));
echo '</pre>';
?>

<!-- *** La fonction date() -->
<?php
echo date('d/m/Y') . '<br>';
echo date('l d m Y h:i:s') . '<br>';
echo date('c') . '<br>';
echo date('r') . '<br>';
?>
<?php
echo date('d m Y h:i:s') . '<br>';
echo gmdate('d-m-Y h:i:s') . '<br>';
date_default_timezone_set('Europe/Moscow'); //Moscou = GMT+3
echo date('d m Y h:i:s') . '<br>';
echo gmdate('d-m-Y h:i:s') . '<br>';
?>

<!-- *** LES VARIABLES SUPERGLOBALES *** -->
<!-- Les variables superglobales sont des variables internes au PHP, ce qui signifie que ce sont des variables créées automatiquement par le PHP.

Ces variables vont être accessibles n’importe où dans le script et quel que soit le contexte, qu’il soit local ou global. C’est d’ailleurs la raison pour laquelle on appelle ces variables « superglobales ».

Il existe 9 superglobales en PHP 
$GLOBALS ;
$_SERVER ;
$_REQUEST ;
$_GET ;
$_POST ;
$_FILES ;
$_ENV ;
$_COOKIE ;
$_SESSION.
-->

<!-- *** La variable superglobale $_SERVER *** -->
<?php
            //Renvoie le nom du fichier contenant le script 
            echo $_SERVER['PHP_SELF']. '<br>';
            
            //Renvoie le nom du serveur qui héberge le fichier
            echo $_SERVER['SERVER_NAME']. '<br>';
            
            //Renvoie l'adresse IP du serveur qui héberge le fichier
            echo $_SERVER['SERVER_ADDR']. '<br>';
            
            //Retourne l'IP du visiteur demandant la page
            echo $_SERVER['REMOTE_ADDR']. '<br>';
            
            /*Renvoie une valeur non vide si le script a
             *été appelé via le protocole HTTPS*/
            echo $_SERVER['HTTPS']. '<br>';
            
            //Retourne le temps Unix du début de la requête
            echo $_SERVER['REQUEST_TIME'];
        ?>

        <!-- *** La variable superglobale $_ENV *** -->
        <?php
            echo $_ENV['USER']. ' exécute actuellement ce script';
        ?>
        <!-- *** Les variables superglobales $_GET et $_POST *** -->
        <!-- ces deux superglobales vont stocker les différentes valeurs envoyées par un utilisateur 
        via un formulaire selon la méthode d’envoi : $_GET stockera les valeurs lorsque le 
        formulaire sera envoyé via la méthode GET tandis que $_POST stockera les valeurs 
        lorsque le formulaire sera envoyé via la méthode POST. -->
        <?php
            //Si notre variable $_POST['prenom'] est bien définie, echo...
            if(isset($_POST['prenom'])){
                echo 'Bonjour, tu t\'appelles ' .$_POST['prenom'];
            }
        ?>
        




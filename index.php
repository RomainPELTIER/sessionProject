<?php
/* On inclut le fichier include.php qui contient toutes les classes à inclure dans notre projet
*  Nous incluons dabord les interfaces puis les classes car les classes utilisent les interfaces
*/
include 'include.php';
/*
 * On déclare une nouvelle variable sessionManager et on lui assigne une nouvelle instance de l'objet session manager
 * Cela nous amène dans la mèthode magique __construct() (le constructeur de l'objet)
 */
$sessionManager = new SessionManager();
/*
 * On cré des nouveaux objets (on passe par leurs constructeurs)
 */
$audiRS1 = new Audi('Audi','Audi', 'RS1', 100000, 5, 1, 1, 1);
$z900 = new Kawasaki('Z900', 'z900', true);
/*
 * Nous essayons d'assigner une valeur à un attribut qui n'existe pas
 * Cela nous renvoie à la fonction magique __set('audiRS1', $audiRS1).
 * La clé sera audiRS1 et la valeur sera la variable $audiRS1
 */
$sessionManager->audiRS1 = $audiRS1;
/*
 * Nous essayons d'assigner une valeur à un attribut qui n'existe pas
 * Cela nous renvoie à la fonction magique __set('audiRS1', $audiRS1).
 * La clé sera audiRS1 et la valeur sera la variable $audiRS1
 */
$sessionManager->z900 = $z900;
// Ici on affiche un message.
var_dump('ajouté en session !!');
// L'objet est détruit automatiquement à la fin du script la fonction magique __destruct est appelé implicitement

$ferrari = new Audi('Audi','RS6', 100000, 5, 1, 1,1, 0);
$ferrari->persist();
var_dump($ferrari);
$ferrari->erase();
var_dump($ferrari);
$ferrari->update();
var_dump($ferrari);
?>
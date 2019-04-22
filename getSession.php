
<?php
include 'include.php';
/*
 * On déclare une nouvelle variable sessionManager et on lui assigne une nouvelle instance de l'objet session manager
 * Cela nous amène dans la mèthode magique __construct() (le constructeur de l'objet)
 */
$sessionManager = new SessionManager();
/*
 * Nous reccupérons tous nos attributs avec la fonction getAttributs nous les retransformons en objet avec la fonction
 *  unserialize
 */
foreach ($sessionManager->getAttributs() as $attr){
    var_dump(unserialize($attr));
}
?>
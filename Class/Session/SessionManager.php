<?php
class SessionManager {
    private $attributs = [];
    /*
     * Fonction magique qui est appelé lorsque l'on instancie un nouvel objet
     */
    public function __construct()
    {
        /*
         * On démarre un nouvelle session
         */
        session_start();
        /*
         * $_SESSION est une variable session qui contient un tableau. Nous le parcourons pour réccupérer toutes les données mises en session
         * Nous ajouterons les clés et les valeurs contenu dans notre session dans notre tableau d'atributs $attributs
         */
        foreach ($_SESSION as $key=>$value) {
            $this->attributs[$key] = $value;
        }
    }
    // Fonction appelé implicitement à la fin du script ou appelé par le programme. Elle détruit l'objet
    public function __destruct()
    {
        // Pour chaque elements de notre tableau d'attribut, nous les sauvegardons en session
        foreach ($this->attributs as $key=>$value){
            // $_SESSION est une variable serveur nous parcourons nos attributs pour les sauvegarder en session
            $_SESSION[$key] = $value;
        }
    }
    public function getAttributs(){
        return $this->attributs;
    }
    /*
     * Fonction appelé quand on essaie d'assignr une variable à un attribut qui n'existe pas
     * Elle prend deux paramètres la clé et la valeur
     * Exemple : $sessionManager->username = 'Aurélien'
     * La clé sera 'username' et la valeur sera 'Aurélien'
     */
    public function __set($name, $value)
    {
        /*
         * On ajoute dans notre tableau d'attribut un élément avec la clé à ajouté et la valeur à ajouté
         * Cette valeur sera sérialisé (transformé en chaine de caractère) afin d'être stocké plus tard en session.
         */
        $this->attributs[$name] = serialize($value);
    }
    public function __get($name)
    {
        return unserialize($this->attributs[$name]);
    }
    public function __isset($name)
    {
        return isset($this->attributs[$name]);
    }
    public function __unset($name)
    {
        unset($this->attributs[$name]);
    }
}
?>
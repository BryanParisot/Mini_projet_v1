<?php

require_once("Configuration.php");

class BDD {
    // Contiendra l'instance de notre classe.
    protected static $instance;

    // Instance de la PDO
    protected static $bdd;

    protected function __construct() {
        
        self::$host     = Configuration::$host;
        self::$nameBDD  = Configuration::$nameBDD;
        self::$username = Configuration::$username;
        self::$password = Configuration::$password;
        self::connect();
    }
    
    protected function __clone() {
    }

    private static $host;
    private static $nameBDD;
    private static $username;
    private static $password;

    /**
     * Connecte à la BDD et renvoie l'instance une fois créée
     */
    protected static function connect() {
        $host       = self::$host;
        $nameBDD    = self::$nameBDD;
        $username   = self::$username;
        $password   = self::$password;

        try {
            self::$bdd = new PDO("mysql:host={$host};dbname={$nameBDD};charset=utf8", $username, $password);
        }
        catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        return self::$bdd;
    }

    /**
     * Renvoie l'instance une fois créée et la créer si elle ne l'était pas déjà
     */
    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param String $sql - Requête SQL
     * @param Array $data - Tableau de paramètres, peu être nul
     */
    public static function executeRequest($sql, $data = null) {
        // On récupére la BDD ou l'on s'y connecte si $this->bdd était nul
        $instance = self::getInstance();
        $bdd = $instance::$bdd;

        // Si $data n'est pas défini ou est de taille vide
        if (!isset($data) || (sizeof($data) === 0)) {
            // On exécute la requête SQL sans avoir besoin de $data
            $result = $bdd->query($sql);
        } 
        
        else {
            // On exécute la requête SQL en utilisant $data

            // $sql = "SELECT ? FROM ?";
            // $data = array("id", "utilisateurs");
            //--> "SELECT id FROM utilisateurs";

            // $sql = "SELECT :column FROM :nomTable";
            // $data = array(":column" => "id", ":nomTable" => "utilisateurs");
            //--> "SELECT id FROM utilisateurs";

            $request = $bdd->prepare($sql);
            $result = $request->execute($data);
        }

        // On récupére les résultats 
        return $result;
    }
}

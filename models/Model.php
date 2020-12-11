<?php

abstract class Model
{
    private $host = "localhost";
    private $nameBDD = "tp8-mvc";
    private $username = "root";
    private $password = "";

    // Instance PDO de la BDD
    protected $bdd;

    /**
     * Connecte à la BDD et renvoie l'instance une fois créée
     */
    private function _connectToBDD()
    {
        $bdd = new PDO("mysql:host={$this->host};dbname={$this->nameBDD};charset=utf8", $this->username, $this->password);
        return $bdd;
    }

    /**
     * Renvoie l'instance une fois créée et la créer si elle ne l'était pas déjà
     */
    protected function getBDD()
    {
        if (!isset($this->bdd)) {
            $this->bdd = $this->_connectToBDD();
        }
        return $this->bdd;
    }

    /**
     * @param String $sql - Requête SQL
     * @param Array $data - Tableau de paramètres, peu être nul
     */
    protected function executeRequest($sql, $data = null)
    {
        // On récupére la BDD ou l'on s'y connecte si $this->bdd était nul
        $bdd = $this->getBDD();

        // Si $data n'est pas défini ou est de taille vide
        if (!isset($data) || (sizeof($data) === 0)) {
            // On exécute la requête SQL sans avoir besoin de $data
            $result = $bdd->query($sql);
        } else {
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

    /**
     * Met à jour les champs privés à partir des clés contenues dans le tableau data
     * Celles-ci permettent d'appeler les setters associés.
     * @param Array $data - Ensemble des setters à mettre à jour
     */
    public function hydrate($data)
    {
        // On traite chaque clé du tableau $data
        foreach ($data as $setterName => $value) {
            // On récupère le nom des différents setters dans $data
            // On construit le nom de la méthode à partir de $setterName
            // On met $setterName en minuscule puis on met la première lettre en majuscules

            // Ex: array("eMAIL" => "monemail@gmail.com", ...)
            // Donne strtolower("eMAIL") = "email"
            // ucfirst(strtolower("eMAIL")) = "Email"
            // 'set' . ucfirst(strtolower($setterName)) = "setEmail"
            $method = 'set' . ucfirst(strtolower($setterName));
            // On vérifie que le setter correspondant existe
            if (method_exists($this, $method)) {
                // S'il existe, on l'appelle
                $this->$method($value);
            }
        }
    }

    /**---------------------------------------------------------------
     * Méthodes CRUD
     * ------------------------------------------------------------ */

    /**
     * Effectue une requête de type INSERT INTO
     * @param String $tableName - Nom de la table à manipuler
     * @param Array $data - Tableau contenant les données à insérer dans la table
     */
    protected function create($tableName, $data)
    {

        $colonnes = [];
        $valeurs = [];

        // On récupére les clés et leur valeur associé
        foreach ($data as $key => $value) {
            $colonnes[] = $key;
            $valeurs[] = $value;
        }

        /* // Alternative :
            $colonnes = array_keys($data);
            $valeurs = array_values($data);
        */

        $textColonnes = implode("`, `", $colonnes);
        $textValeurs = implode("', '", $valeurs);

        $sql = "INSERT INTO `{$tableName}` (`{$textColonnes}`) VALUES ('{$textValeurs}')";
        // echo "<p>$sql</p>";

        $this->executeRequest($sql, null);
        // "INSERT INTO nomDeLaTable (colonne1, colonne2, ...) VALUES (valeur_colonne1, valeur_colonne2, ...)"
    }

    /**
     * Effectue une requête de type SELECT * FROM nomDeTable WHERE condition1 AND condition2, ...
     * @param String $tableName - Nom de la table à manipuler
     * @param Array $data - Tableau contenant les données à utiliser comme condition
     */
    protected function findBy($tableName, $data)
    {

        // On crée notre requête SQL
        $sql = "SELECT * FROM `{$tableName}`";

        if (sizeof($data) > 0) {
            // Liste des conditions
            $conditions = [];

            foreach ($data as $key => $value) {
                // On ajoute une condition au tableau
                // $key est la colonne et $value la valeur qui la conditionne
                $conditions[] = "`{$key}` = '{$value}'";
            }

            // On ajoute le séparateur " AND " entre chaque condition du tableau
            $textConditions = implode(" AND ", $conditions);

            $sql .= " WHERE {$textConditions}";
        }

        // echo "<p>$sql</p>";

        // On exécute notre requête SQL puis on renvoie son résultat
        return $this->executeRequest($sql, null);
    }

    /**
     * Effectue une requête de type SELECT * FROM nomDeTable WHERE condition1 AND condition2, ...
     * @param String $tableName - Nom de la table à manipuler
     * @param Array $data - Tableau contenant les données à utiliser comme condition
     * @param Array $dataConditions - Condition à préciser pour le update
     */
    protected function update($tableName, $data, $dataConditions)
    {

        // Liste des colonnes à modifier
        $colonnesToEdit = [];

        foreach ($data as $key => $value) {
            // On ajoute une colonne à éditer au tableau
            // $key est la colonne et $value la nouvelle valeur à utiliser
            $colonnesToEdit[] = "`{$key}` = '{$value}'";
        }

        $textColonneToEdit = implode(", ", $colonnesToEdit);

        //------------------------------------------------------------

        // Liste des conditions
        $conditions = [];

        foreach ($dataConditions as $key => $value) {
            // On ajoute une condition au tableau
            // $key est la colonne et $value la valeur qui la conditionne
            $conditions[] = "`{$key}` = '{$value}'";
        }
        //var_dump($conditions);

        // On ajoute le séparateur " AND " entre chaque condition du tableau
        $textConditions = implode(" AND ", $conditions);

        //------------------------------------------------------------

        // On crée notre requête SQL
        $sql = "UPDATE `{$tableName}` SET {$textColonneToEdit} WHERE {$textConditions}";
        // echo "<p>$sql</p>";

        // On exécute notre requête SQL
        $this->executeRequest($sql, null);
    }

    /**
     * Effectue une requête de type DELETE FROM nomDeTable WHERE condition1 AND condition2, ...
     * @param String $tableName - Nom de la table à manipuler
     * @param Array $data - Tableau contenant les données à utiliser comme condition
     */
    protected function delete($tableName, $data)
    {
        // Liste des conditions
        $conditions = [];

        foreach ($data as $key => $value) {
            // On ajoute une condition au tableau
            // $key est la colonne et $value la valeur qui la conditionne
            $conditions[] = "`{$key}` = '{$value}'";
        }
        //var_dump($conditions);

        // On ajoute le séparateur " AND " entre chaque condition du tableau
        $textConditions = implode(" AND ", $conditions);

        // On crée notre requête SQL
        $sql = "DELETE FROM `{$tableName}` WHERE {$textConditions}";
        // echo "<p>$sql</p>";

        // On exécute notre requête SQL puis on renvoie son résultat
        $this->executeRequest($sql, null);
    }
}
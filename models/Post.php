<?php
class Post extends Model
{

    private $id;
    private $id_utilisateurs;
    private $id_categorie;
    private $titre;
    private $message;
    private $date_heure_creation;

    public static $tableName = 'posts';

    public function __construct($data = array()) {
        $this->hydrate($data);
    }


    /* ----------------------------------------------
        Utils : Méthodes utiles
    -------------------------------------------------*/

    public function refresh() {

        parent::refreshModel(array("id_utilisateurs" => $this->id_utilisateurs, "titre" => $this->titre, "message" => $this->message, "date_heure_creation" => $this->date_heure_creation));
    }


    /* ----------------------------------------------
                            Setters
    -------------------------------------------------*/

    public function setId($id) {

        $this->id = intval($id);
    }

    public function setId_categorie($id_categorie) {

        $this->id_categorie = intval($id_categorie);
    }

    public function setId_utilisateurs($id_utilisateurs) {

        $this->id_utilisateurs = intval($id_utilisateurs);
    }

    public function setTitre($titre) {

        $this->titre = $titre;
    }

    public function setMessage($message) {

        $this->message = $message;
    }

    public function setDate_heure_creation($date_heure_creation) {

        $this->date_heure_creation = $date_heure_creation;
    }

    /* ----------------------------------------------
                                Getters
    -------------------------------------------------*/

    public function getId() {

        return intval($this->id);
    }

    public function getId_categorie() {

        return intval($this->id_categorie);
    }

    public function getId_utilisateurs() {

        return intval($this->id_utilisateurs);
    }

    public function getTitre() {

        return $this->titre;
    }

    public function getMessage() {

        return $this->message;
    }

    public function getDate_heure_creation() {

        return $this->date_heure_creation;
    }

    public function getDataArray() {

        return array(
            "id_utilisateurs"     => $this->getId_utilisateurs(),
            "id_categorie"        => $this->getId_categorie(),
            "titre"               => $this->getTitre(),
            "message"             => $this->getMessage(),
            "date_heure_creation" => $this->getDate_heure_creation()
        );
    }

    /**
     * Met à jour les setters associés aux clés de data
     * @param Integer $id - Id de l'utilisateur dans la base de données
     */
    public static function getPostById($id) {
        // Appelle “findBy” de “Model”
        $data = self::_findOneBy(self::$tableName, array("id" => $id));

        if ($data) {
            // On crée un utilisateur à partir des données
            $post = new Post($data);
            return $post;
        } 
        
        else {
            echo "<p>/!\ Je n'ai pas pu récupérer l'utilisateur avec l'id : {$id}</p>";
            return null;
        }
    }

    public static function getAllPost($idLangage) {
        // Exemple de requête SQL
        // On récupére l'instance de la bdd
        $bdd = BDD::getInstance();
        // On exécute une requête SQL
        $resultPDO = $bdd->executeRequest("SELECT posts.id_utilisateurs,users.prenom,posts.titre,categories.nom_langage,id_reponse
                                           FROM posts
                                           INNER JOIN users 
                                           ON posts.id_utilisateurs = users.id
                                           INNER JOIN categories 
                                           ON posts.id_categorie = categories.id
                                           WHERE categories.langage = {$idLangage}
                                           ORDER BY posts.id DESC ");

        // On récupére le tableau des résultats si possible
        if ($resultPDO) {
            $data = $resultPDO->fetchAll(PDO::FETCH_ASSOC);
            // On affiche le tableau des résultats
            // var_dump($data);

            if ($data) {
                // On renvoie tous les posts trouvés
                return $data;
            } 
            
            else {
                echo "<p>/!\ je n'ai pas pu récupérer les posts</p>";
                return array();
            }
        }
        
            else{
                return array();
        }
    }

    /**
     * Recupere tous les posts par rapport à l'id utilisateur.
     */
    public static function getAllPostByUserId($id_user) {
        // Appelle “findBy” de “Model”
        $data = self::_findAllBy(self::$tableName, array('id_utilisateurs' => $id_user));

        if ($data) {
            // On renvoie tous les utilisateurs trouvés
            return $data;
        } 
        
        else {
            echo "<p>/!\ je n'ai pas pu récupérer....</p>";
            return array();
        }
    }

    public function getAuthor(){

        // Exemple de requête SQL
        // On récupére l'instance de la bdd
        $bdd = BDD::getInstance();
        // On exécute une requête SQL
        $resultPDO = $bdd->executeRequest("SELECT id_utilisateurs, users.pseudo , users.prenom , users.nom, users.email
                                           FROM posts
                                           INNER JOIN users 
                                           ON posts.id_utilisateurs = users.id
                                           GROUP BY id_utilisateurs 
                                           HAVING id_utilisateurs = {$this->getId_utilisateurs()}");

        // On récupére le tableau des résultats si possible
        if ($resultPDO) {
            $data = $resultPDO->fetchAll(PDO::FETCH_ASSOC);
            // On affiche le tableau des résultats
            // var_dump($data);

            if ($data) {
                // On renvoie tous les posts trouvés
                return $data[0];
            } else {
                echo "<p>/!\ je n'ai pas pu récupérer les posts</p>";
                return array();
            }
        }
              else{
                return array();
        }
    }
}

<?php
class Post extends Model
{

    private $id;
    private $id_utilisateur;
    private $titre;
    private $message;
    private $date_heure_creation;

    public $tableName = 'posts';

    /* ----------------------------------------------
        Utils : Méthodes utiles
    -------------------------------------------------*/

    public function refresh()
    {
        parent::refreshModel(array("id_utilisateur" => $this->id_utilisateur, "titre" => $this->titre, "message" => $this->message, "date_heure_creation" => $this->date_heure_creation));
    }


    /* ----------------------------------------------
                            Setters
    -------------------------------------------------*/

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = intval($id_utilisateur);
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setDate_heure_creation($date_heure_creation)
    {
        $this->date_heure_creation = $date_heure_creation;
    }

    /* ----------------------------------------------
                                Getters
    -------------------------------------------------*/

    public function getId()
    {
        return intval($this->id);
    }

    public function getId_utilisateur()
    {
        return intval($this->id_utilisateur);
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getDate_heure_creation()
    {
        return $this->date_heure_creation;
    }

    public function getDataArray()
    {
        return array(
            "id_utilisateur" => $this->getId_utilisateur(),
            "titre" => $this->getTitre(),
            "message" => $this->getMessage(),
            "date_heure_creation" => $this->getDate_heure_creation()
        );
    }

    /**
     * Met à jour les setters associés aux clés de data
     * @param Integer $id - Id de l'utilisateur dans la base de données
     */
    public static function getPostById($id)
    {
        // Appelle “findBy” de “Model”
        $data = self::_findOneBy(self::$tableName, array("id" => $id));

        if ($data) {
            // On crée un utilisateur à partir des données
            $produit = new Post($data);
            return $produit;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer l'utilisateur avec l'id : {$id}</p>";
            return null;
        }
    }

    public static function getAllPost()
    {
        // Appelle “findBy” de “Model”
        $data = self::_findAllBy(self::$tableName, array());

        if ($data) {
            // On renvoie tous les utilisateurs trouvés
            return $data;
        } else {
            echo "<p>/!\ je n'ai pas pu lorem lorem lorem lorem</p>";
            return array();
        }
    }
}

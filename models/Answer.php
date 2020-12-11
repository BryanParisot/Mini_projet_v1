<?php

class Answer extends Model
{
    private $id;
    private $id_utilisateur;
    private $id_categorie;
    private $id_post;
    private $message;

    public $tableName = "reponses";



    public function refresh()
    {
        parent::refreshModel(array("id_utilisateur" => $this->id_utilisateur, "id_categorie" => $this->id_categorie, "id_post" => $this->id_post, "message" => $this->message));
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

    public function setId_categorie($id_categoriers)
    {
        $this->id_categoriers = intval($id_categoriers);
    }

    public function setId_post($id_post)
    {
        $this->id_post = intval($id_post);
    }

    public function setMesagge($mesagge)
    {
        $this->mesagge = intval($mesagge);
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
    public function getId_categorie()
    {
        return intval($this->id_categorie);
    }
    public function getId_post()
    {
        return intval($this->id_post);
    }
    public function getMessage()
    {
        return intval($this->message);
    }


    public function getDataArray()
    {
        return array(
            "id_utilisateur" => $this->getId_utilisateur(),
            "id_categorie" => $this->getId_categorie(),
            "id_post" => $this->getId_post(),
            "message" => $this->getmessage()
        );
    }


    /**
     * Met à jour les setters associés aux clés de data
     * @param Integer $id - Id de l'utilisateur dans la base de données
     */
    public static function getAnswerById($id)
    {
        // Appelle “findBy” de “Model”
        $data = self::_findOneBy(self::$tableName, array("id" => $id));

        if ($data) {
            // On crée un utilisateur à partir des données
            $commande = new Answer($data);
            return $commande;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer ******* avec l'id : {$id}</p>";
            return null;
        }
    }
    public static function getAllAnswer()
    {
        // Appelle “findBy” de “Model”
        $data = self::_findAllBy(self::$tableName, array());

        if ($data) {
            // On renvoie tous les utilisateurs trouvés
            return $data;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer la ******* </p>";
            return array();
        }
    }
}

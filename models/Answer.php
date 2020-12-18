<?php

class Answer extends Model
{
    private $id;
    private $id_utilisateur;
    private $id_categorie;
    private $id_post;
    private $reponse;

    public static $tableName = "reponses";

    public function __construct($data = array())
    {
        $this->hydrate($data);
    }




    public function refresh()
    {
        parent::refreshModel(array("id_utilisateur" => $this->id_utilisateur, "id_categorie" => $this->id_categorie, "id_post" => $this->id_post, "reponse" => $this->reponse));
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

    public function setReponse($reponse)
    {
        $this->reponse = ($reponse);
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
    public function getReponse()
    {
        return intval($this->reponse);
    }


    public function getDataArray()
    {
        return array(
            "id_utilisateur" => $this->getId_utilisateur(),
            "id_categorie"   => $this->getId_categorie(),
            "id_post"        => $this->getId_post(),
            "reponse"        => $this->getReponse()
        );
    }


    public static function getAllAnswerFromPostId($postId)
    {
        // Exemple de requête SQL
        // On récupére l'instance de la bdd
        $bdd = BDD::getInstance();
        // On exécute une requête SQL
        $resultPDO = $bdd->executeRequest("SELECT posts.id_utilisateurs,users.prenom,posts.titre,categories.nom_langage,posts.message,reponses.reponse
                                            FROM posts
                                            INNER JOIN users 
                                            ON posts.id_utilisateurs = users.id
                                            INNER JOIN categories 
                                            ON posts.id_categorie = categories.id
                                            INNER JOIN reponses 
                                            ON posts.id_reponse = reponses.id
                                            WHERE posts.id = {$postId}");

        // On récupére le tableau des résultats si possible
        if ($resultPDO) {
            $data = $resultPDO->fetchAll(PDO::FETCH_ASSOC);
            // On affiche le tableau des résultats
            // var_dump($data);

            if ($data) {
                // On renvoie tous les posts trouvés
                return $data;
            } else {
                echo "<p>/!\ je n'ai pas pu récupérer les posts</p>";
                return array();
            }
        }else{
            return array();
        }
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
    // public static function getAllAnswer()
    // {
    //     // Appelle “findBy” de “Model”
    //     $data = self::_findAllBy(self::$tableName, array());

    //     if ($data) {
    //         // On renvoie tous les utilisateurs trouvés
    //         return $data;
    //     } else {
    //         echo "<p>/!\ Je n'ai pas pu récupérer la ******* </p>";
    //         return array();
    //     }
    // }
}

<?php

class Category extends Model
{
    private $id;
    private $id_users;
    private $langage;

    public $tableName = "categories";


    public function refresh()
    {
        parent::refreshModel(array("id_users" => $this->id_users, "langage" => $this->langage));
    }



    /* ----------------------------------------------
                            Setters
    -------------------------------------------------*/

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function setId_users($id_users)
    {
        $this->id_users = intval($id_users);
    }

    public function setLangage($langage)
    {
        $this->langage = intval($langage);
    }

    /* ----------------------------------------------
                                Getters
    -------------------------------------------------*/

    public function getId()
    {
        return intval($this->id);
    }

    public function getId_users()
    {
        return intval($this->id_users);
    }

    public function getLangage()
    {
        return intval($this->langage);
    }
    public function getDataArray()
    {
        return array(
            "id_users" => $this->getId_users(),
            "langage" => $this->getLangage()
        );
    }


    /**
     * Met à jour les setters associés aux clés de data
     * @param Integer $id - Id de l'utilisateur dans la base de données
     */
    public static function getCategoryById($id)
    {
        // Appelle “findBy” de “Model”
        $data = self::_findOneBy(self::$tableName, array("id" => $id));

        if ($data) {
            // On crée un utilisateur à partir des données
            $commande = new Category($data);
            return $commande;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer la catégorie avec l'id : {$id}</p>";
            return null;
        }
    }
    public static function getAllCategory()
    {
        // Appelle “findBy” de “Model”
        $data = self::_findAllBy(self::$tableName, array());

        if ($data) {
            // On renvoie tous les utilisateurs trouvés
            return $data;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer la catégorie </p>";
            return array();
        }
    }
}

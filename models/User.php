<?php
class User extends Model
{

    private $id;
    private $pseudo;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $role;
    private $etoile;
    private $avatar;

    public static $tableName = 'users';

    function __construct($data = array())
    {
        $this->hydrate($data);
    }

    /**
     * On se connecte à la BDD
     */
    public function connectToBDD($email, $mdp)
    {
        $dataToHydrate = $this->_findOneBy(self::$tableName, array("email" => $email, "mdp" => $mdp));
        if ($dataToHydrate) {
            $this->hydrate($dataToHydrate);
            return true;
        } else {
            echo "/ ! \ Utilisateur introuvable ou identifiant invalide";
            return false;
        }
    }

        /**
     * On vérifie si l'utilisateur associé à l'adresse email de l'instance existe dans la BDD
     */
    public function existInBDD()
    {
        // Appelle “findBy” de “Model”
        $result = $this->_findOneBy(self::$tableName, array("email" => $this->email));

        if ($result) {
            // L'utilisateur existe dans la BDD
            return true;
        } else {
            // L'utilisateur n'existe pas dans la BDD
            return false;
        }
    }

    public function refresh()
    {
        parent::refreshModel(array("email" => $this->email, "mdp" => $this->mdp));
    }



    /* ----------------------------------------------
                            Setters
    -------------------------------------------------*/

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function setRole($role)
    {
        $this->role = intval($role);
    }

    public function setEtoile($etoile)
    {
        $this->etoile = intval($etoile);
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }


    /* ----------------------------------------------
                                Getters
    -------------------------------------------------*/

    public function getId()
    {
        return intval($this->id);
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function getRole()
    {
        return intval($this->role);
    }

    public function getEtoile()
    {
        return intval($this->etoile);
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

        /**
     * Renvoie tous les champs privés sous forme de tableau sauf l'id
     */
    public function getDataArray()
    {
        return array(
            "pseudo" => $this->getPseudo(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "email" => $this->getEmail(),
            "mdp" => $this->getMdp(),
            "role" => $this->getRole(),
            "etoile" => $this->getEtoile(),
            "avatar" => $this->getAvatar(),
        );
    }
    /**
     * Met à jour les setters associés aux clés de data
     * @param Integer $id - Id de l'utilisateur dans la base de données
     */
    public static function getUserById($id)
    {
        // Appelle “findBy” de “Model”
        $data = self::_findOneBy(self::$tableName, array("id" => $id));

        if ($data) {
            // On crée un utilisateur à partir des données
            $user = new User($data);
            return $user;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer l'utilisateur avec l'id : {$id}</p>";
            return null;
        }
    }

    /**
     * Met à jour les setters associés aux clés de data
     */
    public static function getAllUsers()
    {
        // Appelle “findBy” de “Model”
        $data = self::_findAllBy(self::$tableName, array());

        if ($data) {
            // On renvoie tous les utilisateurs trouvés
            return $data;
        } else {
            echo "<p>/!\ Je n'ai pas pu récupérer d'utilisateurs</p>";
            return array();
        }
    }
}

}

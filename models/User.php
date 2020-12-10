<?php
class User extends Model{

    private $id;
    private $pseudo;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $role;
    private $etoile;
    private $avatar;

// public function dataUser(){

//     return = array(
//         'id' => '1',
//         'pseudo' => 'bryanP',
//         'nom' => 'parisot',
//         'prenom'=> 'bryan',
//         'email' => 'bryan@bryan'
//         'mdp'=> 'mdp54'
//         'role' => '1',
//         'etoile' => '',
//         'avatar' = '',
//     );
// }

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





}
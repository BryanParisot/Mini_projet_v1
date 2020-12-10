<?php 

class Answer extends Model{
    private $id;
    private $id_utilisateur;
    private $id_categorie;
    private $id_post;
    private $message;

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





}
<?php
class Post{

    private $id;
    private $id_utilisateur;
    private $titre;
    private $message;
    private $date_heure_creation;


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



}
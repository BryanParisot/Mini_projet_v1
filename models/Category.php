<?php

class Category extends Model{
    private $id;
    private $id_users;
    private $langage;


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

}
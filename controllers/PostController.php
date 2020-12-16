<?php

require_once("controllers/Controller.php");
require_once("Session.php");


class PostController extends Controller 
{

    public function __construct() {}

    public function index() {

        $tousLesPosts = array();
    
            // Si la session n'est pas créée
            if (Session::isCreated()) {
                // La session est donc créée (sinon on aurait été redirigé)
                // On peut donc la récupérer
                $session = Session::get();

                $user = new User($session["userData"]);
            }


        $data = array("title" => "Post", "allPosts" => $tousLesPosts);
        $this->render("post", $data);
    }

}
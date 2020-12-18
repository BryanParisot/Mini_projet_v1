<?php

require_once("controllers/Controller.php");
require_once("Session.php");
require_once("models/User.php");
require_once("models/Post.php");


class WritePostController extends Controller 
{

    public function __construct() {}

    public function index() {

        $tousLesPosts = Post::getAllPost();
    
            // Si la session n'est pas créée
            if (Session::isCreated()) {
                // La session est donc créée (sinon on aurait été redirigé)
                // On peut donc la récupérer
                $session = Session::get();

                $user = new User($session["userData"]);
            }


        $data = array("title" => "Post", "allPosts" => $tousLesPosts);
        $this->render("writePost", $data);
    }

}
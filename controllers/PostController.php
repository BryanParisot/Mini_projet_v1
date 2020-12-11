<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class PostControllerController extends Controller {
    public function __construct() {}

    public function index() {
        $data = array("title" => "PostController");
        $this->render("postController", $data);
    }
     
}
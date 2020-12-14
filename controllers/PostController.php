<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class PostController extends Controller {
    public function __construct() {}

    public function index() {
        $data = array("title" => "Post");
        $this->render("post", $data);
    }
     
}
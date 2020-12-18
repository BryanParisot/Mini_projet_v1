<?php

require_once("controllers/Controller.php");
require_once("Session.php");
require_once("models/User.php");
require_once("models/Post.php");

class WritePostController extends Controller {
    public function __construct() {}

    public function index() {
        $data = array("title" => "WritePostController");
        $this->render("WritePostController", $data);
    }

}
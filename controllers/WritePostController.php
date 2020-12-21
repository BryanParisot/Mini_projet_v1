<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class WritePostController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        $data = array("title" => "writePost");
        $this->render("writePost", $data);
    }
}


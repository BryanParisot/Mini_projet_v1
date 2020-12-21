<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class HomeController extends Controller {
    
    public function __construct() {}

    public function index() {
        $data = array("title" => "Home");
        $this->render("home", $data);
    }
}
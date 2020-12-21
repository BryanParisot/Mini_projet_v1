<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class LogoutController extends Controller {
    
    public function __construct() {}

    public function index() {

        Session::destroy();

        $data = array("title" => "Deconnexion");
        $this->render("logout", $data);
    }
     
}
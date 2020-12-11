<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class ContactController extends Controller {
    public function __construct() {}

    public function index() {
        $data = array("title" => "Contact");
        $this->render("contact", $data);
    }
     
}
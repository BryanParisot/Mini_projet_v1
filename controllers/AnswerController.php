<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class AnswerController extends Controller {
    public function __construct() {}

    public function index() {
        $data = array("title" => "Answer");
        $this->render("answer", $data);
    }
     
}
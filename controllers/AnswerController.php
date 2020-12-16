<?php

require_once("controllers/Controller.php");
require_once("Session.php");

class AnswerController extends Controller {
    public function __construct() {}

    public function index() {

        $tousLesReponses = Answer::getAllAnswer();

        $data = array("title" => "Answer");
        $this->render("answer", $data);
    }
     
}
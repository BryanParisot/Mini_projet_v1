<?php

require_once("controllers/Controller.php");
require_once("Session.php");

require_once("models/User.php");
require_once("models/Post.php");
require_once("models/Answer.php");



class AnswerController extends Controller {
    public function __construct() {}

    public function index() {

        $postId = $_GET['postId'];
        $post = Post::getPostById($postId); 

        $allAnswer = Answer::getAllAnswerFromPostId($postId);

        $data = array("title" => "Answer", 'allAnswer' => $allAnswer, 'postData' => $post->getDataArray(), 'auteurData' => $post->getAuthor());
        // var_dump($post->getAuthor());
        $this->render("answer", $data);

    }
     
}
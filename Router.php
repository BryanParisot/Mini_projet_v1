<?php
require("views/View.php");
require("controllers/AnswerController.php");
require("controllers/ContactController.php");
require("controllers/ErrorController.php");
require("controllers/HomeController.php");
require("controllers/LoginController.php");
require("controllers/LogoutController.php");
require("controllers/PostController.php");
require("controllers/ProfilController.php");
require("controllers/RegisterController.php");
require("controllers/writePostController.php");


class Router
{

    private $answerController;
    private $contactController;
    private $errorController;
    private $homeController;
    private $loginController;
    private $logoutController;
    private $postController;
    private $profilController;
    private $registerController;
    private $writePostController;

    function __construct()
    {
        $this->answerController            = new AnswerController();
        $this->contactController           = new ContactController();
        $this->errorController             = new ErrorController();
        $this->homeController              = new HomeController();
        $this->loginController             = new LoginController();
        $this->logoutController            = new LogoutController();
        $this->postController              = new PostController();
        $this->profilController            = new ProfilController();
        $this->registerController          = new RegisterController();
        $this->writePostController         = new WritePostController();
    }
    // on génére les vues, grace au controller, ici on vérifie si action est bien dans l'url. si il n'y est pas on renvoie sur la page home
    public function routerRequest()
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'answer':
                    $this->answerController->index();
                    break;
                case 'contact':
                    $this->contactController->index();
                    break;
                case 'home':
                    $this->homeController->index();
                    break;
                case 'login':
                    $this->loginController->index();
                    break;
                case 'logout':
                    $this->logoutController->index();
                    break;
                case 'post':
                    $this->postController->index();
                    break;
                case 'profil':
                    $this->profilController->index();
                    break;
                case 'register':
                    $this->registerController->index();
                    break;
                case 'writePost':
                    $this->writePostController->index();
                    break;
                default:
                    $this->errorController->index();
                    break;
            }
        } else {
            header("Location: index.php?action=home");
            exit;
        }
    }
}

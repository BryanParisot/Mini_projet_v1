<?php

require_once("controllers/Controller.php");
require_once("models/User.php");
require_once("Session.php");

class RegisterController extends Controller
{

    public function index()
    {
        // On vérifie que si $_POST est vide
        // Si c'est le cas alors le formulaire n'a pas été validé
        if (sizeof($_POST) === 0) {
            $this->render("register", array("title" => "Page d'inscription"));
        }
        // Sinon le formulaire a été validé
        else {

            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            // On vérifie la confirmation de mot de passe
            // Si la confirmation n'est pas bonne
            if ($password !== $confirm_password) {
                $this->render("register", array("title" => "Page d'inscription", "error" => "Confirmation du mot de passe incorrect"));
            }
            // Si la confirmation est bonne
            else {

                $email  = $_POST["email"];
                $prenom = $_POST["prenom"];
                $nom    = $_POST["nom"];
                $pseudo = $_POST["pseudo"];
                $avatar = $_POST("avatar");

                $user = new User(array(
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "pseudo" => $pseudo,
                    "email" => $email,
                    "mdp" => hash("sha256", $_POST["password"]),
                    "role" => 0,
                    "etoiles" => 0,
                    "avatar" => $avatar
                ));

                if ($user->existInBDD()) {
                    $this->render("register", array("title" => "Page d'inscription", "error" => "Cet utilisateur existe déjà"));
                } else {
                    // On ajoute l'utilisateur à la BDD
                    $user->pushToBDD();    //--------------pensé a linker BDD ---------------//

                    // On crée une session pour l'utilisateur
                    Session::create($user);

                    // On redirige vers la page de profil
                    header("Location: index.php?action=profil");
                    exit;
                }
            }
        }
    }
}
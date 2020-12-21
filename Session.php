<?php

class Session {

    /**
     * On crée une session en stockant les données de l'utilisateur à l'intérieur
     * @param User $user - Instance de l'utilisateur courant
     */
    static public function create($user) {
        // On récupére la session
        self::_checkStatus();
        // On la remplie si elle n'était pas créée sinon on écrase les anciennes valeurs
        $_SESSION["userId"] = $user->getId();
        $_SESSION["userData"] = $user->getDataArray();
    }

    /**
     * On récupère une session
     */
    static public function get() {
        // On récupére la session
        self::_checkStatus();
        // On la renvoie
        return $_SESSION;
    }

    /**
     * On récupère une session
     */
    static public function destroy() {
        // On récupére la session
        self::_checkStatus();
        // On la détruit
        session_destroy();
        // Alors je redirige vers la page de connexion
        header("Location: index.php?action=home");
        exit;
    }

    /**
     * On récupère si une session a déjà été créée
     */
    static public function isCreated() {
        
        self::_checkStatus();
        if(isset($_SESSION) && isset($_SESSION["userId"]) && isset($_SESSION["userData"])) {
            //echo "Session créée";
            return true;
        }
        else {
            //echo "La session n'est pas créée";
            return false;
        }
    }

    static private function _checkStatus() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

}
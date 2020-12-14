<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title ?></title>

    <meta name="description" content="Mini_projet_v1" />
    <meta name="keywords" content="MVC, PHP, MySQL, mini projet, JS, HTML" />

    <meta name="author" content="Prenom NOM">
    <meta name="language" content="fr-FR" />
    <meta name="robots" content="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Fichiers CSS -->
    <link rel="stylesheet" href="assets/css/base.css" />
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fichiers Javascript -->
    <!-- jQuery and JS bundle w/ Popper.js -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/test.js"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    
    <!-- Js page profil -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/profil.js"></script>

</head>

<header>
<!------------------ NAVBAR --------------------->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Mini Projet</h4>
                <a href="http://localhost/Mini_projet_v1/index.php?action=home">Home</a>
                <a href="http://localhost/Mini_projet_v1/index.php?action=login">Connexion</a>
                <a href="http://localhost/Mini_projet_v1/index.php?action=register">S'enregistrer</a>
                <a href="http://localhost/Mini_projet_v1/index.php?action=logout">Déconnexion</a>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>

<body>
<div class="main-container container p-3 my-3 border">
        <?= $content ?>
    </div>
    


<footer>
    <div class="card-footer bg-dark text-white text-center">© tout droit reservé, Cedric Schuman, Parisot Bryan <p class="text-white" id="date_footer">XXXX</p></div>
</footer>

</body>

</html>
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

    <link rel="icon" type="image/png" href="<?= getAssetLink("img/favicon.png") ?>" />

    <!-- Fichiers CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Nos fichiers CSS globaux -->
    <link rel="stylesheet" href="<?= getAssetLink("css/base.css") ?>" crossorigin="anonymous">

    <!-- Nos fichiers CSS dynamiques -->
    <?php foreach ($CSS_FILES as $file) : ?>
        <link rel="stylesheet" href="<?= getAssetLink($file) ?>" />
    <?php endforeach ?>
    <!-- /Fichiers CSS -->

    <!-- Fichiers Javascript -->
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script type="text/javascript" src="<?= getAssetLink("js/logout.js") ?>"></script>

    <!-- Nos fichiers JS dynamiques -->
    <?php foreach ($JS_FILES as $file) : ?>
        <script src="<?= getAssetLink($file) ?>"></script>
    <?php endforeach ?>
    <!-- /Fichiers Javascript -->

</head>

<body>




</body>

</html>
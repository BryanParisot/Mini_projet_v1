<?php

require_once("Configuration.php");

/**
 * Fonctions simples et facilitant certains usages dans les vues
 */

function getLink($urlRequest)
{
    return "http://" . $_SERVER['SERVER_NAME'] . "/" . $urlRequest;
}

function getAssetLink($asset)
{
    return getLink("assets/" . $asset);
}

function isAdmin($userData)
{
    return ($userData["role"] === Configuration::$IS_ADMIN);
}
//ROLE*****

function isModerateur($userData)
{
    return ($userData["role"] === Configuration::$IS_MODERATEUR);
}

function isSessionActive($userData)
{
    return (sizeof($userData) > 0);
}

//CATEGORIE*****

function isHtml($userData)
{
    return ($userData["categorie"] === Configuration::$IS_HTML);
}

function isCss($userData)
{
    return ($userData["categorie"] === Configuration::$IS_CSS);
}

function isJs($userData)
{
    return ($userData["categorie"] === Configuration::$IS_JS);
}

function isPhp($userData)
{
    return ($userData["categorie"] === Configuration::$IS_PHP);
}


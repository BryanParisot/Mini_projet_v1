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

function isSessionActive($userData)
{
    return (sizeof($userData) > 0);
}
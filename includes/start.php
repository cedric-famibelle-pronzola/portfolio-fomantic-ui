<?php

session_start();

$wrongFirstName = isset($_SESSION['wrongFirstName']) ? true : false;
$wrongLastName = isset($_SESSION['wrongLastName']) ? true : false;
$wrongEmail = isset($_SESSION['wrongEmail']) ? true : false;
$emptySubject = isset($_SESSION['emptySubject']) ? true : false;
$emptyMessage = isset($_SESSION['emptyMessage']) ? true : false;
$messageOK = isset($_SESSION['messageOK']) ? true : false;
$noCgu = isset($_SESSION['noCGU']) ? true : false;
$captcha = isset($_SESSION['wrongCaptcha']) ? true : false;

/**
 * permet de lier l'instanciation de la casse avec les fichiers présents dans le dossier 'classes'
 * ----------------
 * s'exécute avec "spl_autoload_register('chargerClasse')"
 *
 * @param object $classe
 * @return void
 */
function chargerClasse($classe)
{
    require './classes/' . $classe . '.php';
}

spl_autoload_register('chargerClasse');
require './secure/regex.php';
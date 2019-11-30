<?php

session_start();

$wrongFirstName = isset($_SESSION['wrongFirstName']) ? true : false;
$wrongLastName = isset($_SESSION['wrongLastName']) ? true : false;
$wrongEmail = isset($_SESSION['wrongEmail']) ? true : false;
$noCgu = isset($_SESSION['noCGU']) ? true : false;

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

require './secure/connect.php';
require './secure/regex.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./semantic/out/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="./scripts/css/style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Cédric FAMIBELLE-PRONZOLA | Développeur WEB et WEB mobile</title>
    <meta name="description" content="Cédric FAMIBELLE-PRONZOLA. Développeur WEB et WEB mobile. Créer, développer, c'est mon métier et j'en suis passionné.">
</head>

<body>

    <div class="ui fluid container">
        <header class="ui inverted blue segment">
            <h1 class="ui center aligned header">Cédric FAMIBELLE-PRONZOLA
                <div class="ui sub header center aligned primary" style="color: yellow">Créer, développer, c'est mon métier et j'en suis passionné.</div>
            </h1>
        </header>
    </div>
    <div class="ui tall stacked segment center aligned inverted">
        <h1 class="ui header">
            Projets
            <div class="sub header"><i style="color: red">Cliquez sur le titre du projet afin d'y accéder.</i></div>
        </h1>
        <?php 
            if($wrongFirstName === true || $wrongLastName === true || $wrongEmail === true):
        ?>
            <h1 class="ui header" i style="color: red"><em data-emoji="confused" class="small"></em> Certaines données du formulaires n'ont pas le format requis. <em data-emoji="confused" class="small"></em></h1>
        <?php
            session_unset();
            session_destroy();
            elseif($noCgu):
        ?>
            <h1 class="ui header" i style="color: red"><em data-emoji="confused" class="small"></em> Veuillez accepter les conditions générales pour valider le formulaire. <em data-emoji="confused" class="small"></em></h1>
        <?php
            session_unset();
            session_destroy();
        endif
        ?>
    </div>

    <!-- Modal -->
    <?php include './includes/modal.php' ?>
    <!--# Modal #-->

    <!-- Alertifa Block -->
    <?php include './includes/alertifa_block.php' ?>
    <!--# Alertifa Block #-->

    <!-- Samnipoufe Block -->
    <?php include './includes/samnipoufe_block.php' ?>
    <!--# Samnipoufe Block #-->

    <!-- Books'IFA Block -->
    <?php include './includes/booksifa_block.php' ?>
    <!--# Books'IFA Block #-->

    <!-- Space Bullet Block -->
    <?php include './includes/space_bullet_block.php' ?>
    <!--# Space Bullet Block #-->

    <!-- Spaceship Hunt Block -->
    <?php include './includes/spaceship_hunt_block.php' ?>
    <!--# Spaceship Hunt Block #-->

    <div class="ui tall stacked segment center aligned inverted">
        <h1 class="ui header">Me contacter</h1>
    </div>

    <!-- Contact Block -->
    <?php include './includes/form_contact.php' ?>
    <!--# Contact Block #-->

    <footer>
        <div id="footer" class="ui tall stacked segment center aligned inverted">
            <a class="cgu" href="#">Conditions générales d'utlisation</a>
            <noscript>
                <p><a target="_blank" id="cguNoScript" href="./mentions.html">Cliquez ici si JavaScript n'est pas activé</a></p>
            </noscript>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="./semantic/out/semantic.min.js"></script>
    <script src="./scripts/js/main.js"></script>
</body>

</html>
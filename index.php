<?php

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
    <meta name="description" content="Cédric FAMIBELLE-PRONZOLA. Développeur WEB et WEB mobile. Créer, développer, c'est mon métier">
</head>

<body>
    <div class="ui container">
        <header class="ui inverted blue segment">
            <h1 class="ui center aligned header">Cédric FAMIBELLE-PRONZOLA
                <div class="ui sub header center aligned primary">Créer, développer, c'est mon métier.</div>
            </h1>
        </header>
    </div>
    <!-- Début modal -->
    <div class="ui large modal alertifa-1-mod">
        <div class="ui header center aligned">
            Alert'IFA
            <div class="sub header">L'utilisateur enregistré peut se connecter grâce à son email et son mot de passe</div>
        </div>
        <div class="image content">
            <img src="./img/alertifa/alertifa.png" class="ui centered fluid image huge rounded">
        </div>
        <i class="window close icon"></i>
    </div>
    <div class="ui fullscreen modal alertifa-2-mod">
        <div class="ui header center aligned">
            Alert'IFA
            <div class="sub header">Page d'accueil de l'administrateur.</div>
        </div>
        <div class="image content">
            <img src="./img/alertifa/alertifa2.png" class="ui centered fluid image rounded">
        </div>
        <i class="window close icon"></i>
    </div>
    <div class="ui fullscreen modal alertifa-3-mod">
        <div class="ui header center aligned">
            Alert'IFA
            <div class="sub header">Espace d'administration. L'administrateur peut y ajouter un utilisateur, gérer les rôles de chacun et importer une liste de stagiaire via un fichier csv.</div>
        </div>
        <div class="image content">
            <img src="./img/alertifa/alertifa3.png" class="ui centered fluid image rounded">
        </div>
        <i class="window close icon"></i>
    </div>
    <!--# Fin modal #-->
    <!-- <div class="ui container">
        <article>
            <section>
                <h1 class="ui header centered segment block inverted">Projets</h1>
            </section>
        </article>
    </div> -->

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

    <?php include './includes/form_contact.php' ?>
    <?php include './includes/form_contact.php' ?>
    <?php include './includes/form_contact.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="./semantic/out/semantic.min.js"></script>
    <script src="./scripts/js/main.js"></script>
</body>

</html>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.2/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="./scripts/css/style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Cédric FAMIBELLE-PRONZOLA | Développeur WEB et WEB mobile</title>
    <link rel="stylesheet" media="screen and (max-width: 640px)" href="./scripts/css/style.css" type="text/css" />
    <meta name="description" content="Cédric FAMIBELLE-PRONZOLA. Développeur WEB et WEB mobile. Créer, développer, c'est mon métier">
</head>

<body>
    <div class="ui container">
        <header class="ui inverted blue segment">
            <h1 class="ui center aligned header">Cédric FAMIBELLE-PRONZOLA
                <div class="ui center aligned sub header yellow">Créer, développer, c'est mon métier.</div>
            </h1>
        </header>
    </div>
    <!--# Début modal #-->
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
    <div class="equal width ui grid stackable" id="sticky-alert-stop">
        <div class="row">
            <div class="column">
                <div class="ui sticky sticky-alert raised segment text blue center aligned">
                   <h2 class="ui header blue"><a target="_blank" href="https://www.famibelle-pronzola.website/alertifa">Alert'IFA</a></h2> 
                    <div class="ui tiny images">
                        <img class="ui image" src="./img/logos/html5.png">
                        <img class="ui image" src="./img/logos/css3.png">
                        <img class="ui image" src="./img/logos/js.png">
                        <img class="ui image" src="./img/logos/jquery.png">
                        <img class="ui image" src="./img/logos/ajax.png">
                        <img class="ui image " src="./img/logos/php7.png">
                        <img class="ui image" src="./img/logos/mysql.png">
                        <img class="ui image" src="./img/logos/bootstrap4.png">
                        <img class="ui image" src="./img/logos/mdb.png">
                   </div>
                </div>
            </div>
            <div class="column ui eight wide column">
                <div class="ui raised text blue segment inverted">
                    <h2 class="ui header centered inverted">
                        <a class="ui header centered inverted" class="ui" target="_blank" href="http://www.famibelle-pronzola.website/alertifa">Alert'IFA</a>
                        <div class="sub header inverted">Outil permettant l’amélioration de la communication entre l’administration et les stagiaires, au sein d'un centre de formation.</div>
                    </h2>
                </div>
                <div class="ui padded stackable two column center aligned grid segment blue">
                        <h2 class="ui header dividing blue">Captures d'écran</h2>
                    <div class="stretched row">
                        <div class="column ui">
                            <a class="alertifa-1 ui" href="">
                                <img class="alertifa-img ui image medium centered aligned rounded"
                                src="./img/alertifa/alertifa.png"
                                alt="Capture 1 de alertifa"
                                title="Capture 1 de alertifa"
                                data-inverted=""
                                data-position="top center"
                                data-title="Page de connexion"
                                data-content="Cliquer pour agrandir"
                                data-variation="inverted">
                            </a>
                        </div>
                        <div class="column">
                            <div class="ui">
                                <a class="alertifa-2 ui" href="">
                                    <img class="alertifa-img ui medium image centered aligned rounded"
                                    src="./img/alertifa/alertifa2.png"
                                    alt="Capture 2 de alertifa"
                                    title="Capture 2 de alertifa"
                                    data-inverted=""
                                    data-position="top center"
                                    data-title="Page de connexion"
                                    data-content="Cliquer pour agrandir"
                                    data-variation="inverted">
                                </a>
                            </div>
                            <div class="ui">
                                <a class="alertifa-3 ui" href="">
                                    <img class="alertifa-img ui medium image centered aligned rounded" 
                                    src="./img/alertifa/alertifa3.png"
                                    alt="Capture 3 de alertifa"
                                    title="Capture 3 de alertifa"
                                    data-inverted=""
                                    data-position="bottom center"
                                    data-title="Page de connexion"
                                    data-content="Cliquer pour agrandir"
                                    data-variation="inverted">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="ui header dividing blue">Démonstration vidéo</h2>
                </div>
                <noscript>
                    <a href="https://vimeo.com/338273164">Voir la vidéo</a>
                </noscript>
                <div id="vimeo-alertifa" class="ui embed alertifa-img" data-source="vimeo" data-id="338273164" data-placeholder="./img/alertifa/alertifa3.png" data-inverted=""
                        data-position="top center"
                        data-title="Démonstration de &laquo; Alert'IFA &raquo;"
                        data-variation="inverted"
                        data-inverted="">
                </div>
            </div>
            <div class="column">
                <div class="ui segment blue raised center sticky sticky-alert">
                    <h2 class="ui header centered blue">Documentation</h2>
                    <div class="ui placeholder segment">
                        <div class="ui two column stackable center aligned grid">
                            <div class="ui vertical divider">Ou</div>
                            <div class="middle aligned row">
                                <div class="column">
                                    <div class="ui icon header">
                                        <i class="file pdf icon"></i>
                                        Administrateur
                                    </div>
                                    <a target="_blank" href="./pdf/alertifa-admin-doc.pdf">
                                        <div class="ui primary button inverted">
                                            Voir PDF
                                        </div>
                                    </a>
                                </div>
                                <div class="column">
                                    <div class="ui icon header">
                                        <i class="file pdf icon"></i>
                                        Utilisateur
                                    </div>
                                    <a target="_blank" href="./pdf/alertifa-admin-doc.pdf">
                                        <div class="ui primary button inverted">
                                            Voir PDF
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="equal width ui grid stackable" id="sticky-samnipoufe-stop">
        <div class="row">
            <div class="column">
                <div class="ui raised segment text red sticky-samnipoufe sticky center aligned">
                    <a target="_blank" href="https://www.famibelle-pronzola.website/samnipoufe">
                        <h2 class="ui header red">Samnipoufè</h2> 
                    </a>
                </div>
            </div>
            <div class="column ui eight wide column">
                <div class="ui raised text red segment inverted">
                    <h2 class="ui header red centered inverted">
                        <a class="ui header inverted" target="_blank" href="http://www.famibelle-pronzola.website/samnipoufe">Samnipoufè</a>
                        <div class="sub header inverted">&laquo; To-Do list &raquo; (liste de tâches) simple et intuitive qui facilite la gestion du temps. </div>
                    </h2>
                </div>
                <div class="ui padded stackable two column center aligned grid segment red">
                        <h2 class="ui header dividing red">Captures d'écran</h2>
                    <div class="stretched row">
                        <div class="column ui">
                            <a class="alertifa-1 ui" href="">
                                <img class="alertifa-img ui image medium centered aligned rounded"
                                src="./img/alertifa/alertifa.png"
                                alt="Capture 1 de alertifa"
                                title="Capture 1 de alertifa"
                                data-inverted=""
                                data-position="top center"
                                data-title="Page de connexion"
                                data-content="Cliquer pour agrandir"
                                data-variation="inverted">
                            </a>
                        </div>
                        <div class="column">
                            <div class="ui">
                                <a class="alertifa-2 ui" href="">
                                    <img class="alertifa-img ui medium image centered aligned rounded"
                                    src="./img/alertifa/alertifa2.png"
                                    alt="Capture 2 de alertifa"
                                    title="Capture 2 de alertifa"
                                    data-inverted=""
                                    data-position="top center"
                                    data-title="Page de connexion"
                                    data-content="Cliquer pour agrandir"
                                    data-variation="inverted">
                                </a>
                            </div>
                            <div class="ui">
                                <a class="alertifa-3 ui" href="">
                                    <img class="alertifa-img ui medium image centered aligned rounded" 
                                    src="./img/alertifa/alertifa3.png"
                                    alt="Capture 3 de alertifa"
                                    title="Capture 3 de alertifa"
                                    data-inverted=""
                                    data-position="bottom center"
                                    data-title="Page de connexion"
                                    data-content="Cliquer pour agrandir"
                                    data-variation="inverted">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="ui header dividing red">Démonstration vidéo</h2>
                </div>
                <noscript>
                    <a href="https://vimeo.com/338273164">Voir la vidéo</a>
                </noscript>
                <div id="vimeo-samnipoufe" class="ui embed alertifa-img" data-source="vimeo" data-id="338273164" data-placeholder="./img/alertifa/alertifa3.png" data-inverted=""
                        data-position="top center"
                        data-title="Démonstration de &laquo; Alert'IFA &raquo;"
                        data-variation="inverted"
                        data-inverted="">
                </div>
            </div>
            <div class="column">
                <div class="ui segment red raised sticky-samnipoufe sticky">
                    TEST
                </div>
            </div>
        </div>
    </div>
    <div class="ui raised very padded text container blue segment">
        <h2 class="ui header centered">
            <a target="_blank" href="http://www.famibelle-pronzola.website/booksifa">Books'IFA</a>
            <div class="sub header">Exemple de site de vente en ligne.</div>
        </h2>
    </div>
    <div class="ui raised very padded text container blue segment">
        <h2 class="ui header centered">
            <a target="_blank" href="http://www.famibelle-pronzola.website/space_bullet">Space Bullet</a>
            <div class="sub header">Jeux vidéo 2 joueurs. L'objectif est de détuire son adversaire. Des bonus apparaissent au cours de la partie.</div>

        </h2>

    </div>
    <div class="ui raised very padded text container segment blue">
        <h2 class="ui header centered">
            <a target="_blank" href="http://www.famibelle-pronzola.website/spaceship-hunt">Spaceship Hunt</a>
            <div class="sub header">Reproduction du jeu &laquo; Duck Hunt &raquo;. Possiblité de jouer en solo ou en multijoueur.</div>
        </h2>
        <img class="ui centered image large" src="./img/space.png">
    </div>

    <?php include './includes/form_contact.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.2/dist/semantic.min.js"></script>
    <script src="./scripts/js/main.js"></script>
</body>

</html>
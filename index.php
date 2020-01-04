<?php
    include './includes/start.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.2/dist/semantic.min.css">
    <style>
        body {
            background-color: black;
        }

        noscript>a {
            text-align: center;
            background-color: black;
            font-weight: bold;
        }

        #slogan {
            margin-top: 1em;
            margin-bottom: -1em;
        }
    </style>
    <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">
    <title>Cédric FAMIBELLE-PRONZOLA | Développeur WEB</title>
    <meta name="description" content="Cédric FAMIBELLE-PRONZOLA. Développeur WEB et WEB mobile. Créer, développer, c'est mon métier.
    Site réalisé avec Fomantic UI">
</head>

<body>

    <div class="ui fluid container">
        <header class="ui inverted blue segment">
            <div class="ui huge header">
            <div class="ui grid container aligned centered">
                <div class="ui left floated"><a data-position="bottom center" data-tooltip="VKontact" target="_blank" href="https://vk.com/cedric_famibelle_pronzola"><i class="vk icon link large inverted"></i></a></div>
                    <div><strong>Cédric FAMIBELLE-PRONZOLA</strong></div>
                <div class="ui right floated"><a data-position="bottom center" data-tooltip="Telegram" target="_blank" href="https://t.me/cedric_famibelle_pronzola"><i class="telegram plane icon link large inverted"></i></a></div>
            </div>
                <em id="slogan" class="ui sub header center aligned primary" style="color: yellow">Créer, développer, c'est mon métier.</em>
            </div>
            <noscript>
                <h2 class="ui center aligned header"><i style="color: red">Pour une meilleure expérience lors de la navigation, activez JavaScript.</i></h2>
            </noscript>
        </header>
    </div>
    <div class="ui tall stacked segment center aligned inverted">
        <h1 class="ui header">
            Projets
            <em class="sub header"><i style="color: red">Cliquez sur le titre du projet afin d'y accéder.</i></em>
        </h1>
        <?php
        if ($messageOK) :
            ?>
            <h2 class="ui header" style="color: green"><em data-emoji="relaxed" class="small"></em> Votre message a été envoyé avec succès. <em data-emoji="relaxed" class="small"></em></h2>
        <?php
            session_unset();
            session_destroy();
        endif;
        if ($noCgu) :
            ?>
            <h2 class="ui header" style="color: red"><em data-emoji="confused" class="small"></em> Veuillez accepter les conditions générales pour valider le formulaire. <em data-emoji="confused" class="small"></em></h2>
        <?php
            session_unset();
            session_destroy();
        endif;

        if ($wrongFirstName === true || $wrongLastName === true || $wrongEmail === true || $emptySubject === true || $emptyMessage === true) :
            ?>
            <h2 class="ui header" style="color: red"><em data-emoji="confused" class="small"></em> Certaines données du formulaires n'ont pas le format requis ou certains champs sont vides. <em data-emoji="confused" class="small"></em></h2>
        <?php
            session_unset();
            session_destroy();
        endif;
        ?>
    </div>

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

    <!-- Alertifa Modal -->
    <?php include './includes/alertifa_modal.php' ?>
    <!--# Alertifa Modal #-->

    <!-- Samnipoufè Modal -->
    <?php include './includes/samnipoufe_modal.php' ?>
    <!--# Samnipoufè Modal #-->

    <!-- Books'IFA Modal -->
    <?php include './includes/booksifa_modal.php' ?>
    <!--# Books'IFA Modal #-->

    <!-- Space Bullet Modal -->
    <?php include './includes/space_bullet_modal.php' ?>
    <!--# Space Bullet Modal #-->

    <!-- Spaceship Hunt Modal -->
    <?php include './includes/spaceship_hunt_modal.php' ?>
    <!--# Spaceship Hunt Modal #-->

    <footer>
        <!-- Conditions Modal -->
        <?php include './includes/conditions_modal.php' ?>
        <!--# Conditions Modal #-->
        <div style="display: flex; justify-content:space-around;" id="footer" class="ui tall stacked segment center aligned inverted">
            <a class="cgu" target="_blank" href="./mentions/mentions.html">Conditions générales d'utlisation</a>
            <a rel="me" href="https://mamot.fr/@ced972"><img title='Mastodon' alt='logo mastodon' width="32" height="32" src="./img/logos/mastodon.svg" alt=""></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.2/dist/semantic.min.js"></script>
    <script src="./scripts/js/main.min.js"></script>
</body>

</html>
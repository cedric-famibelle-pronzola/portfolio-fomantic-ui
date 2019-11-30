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

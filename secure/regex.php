<?php

/**
 * permet de vérifier les input en utilisant des regex
 *
 * @param string $regex
 * @param string $input
 * @return boolean
 */
function checkRegex($regex, $input)
{
  $boolRegex = preg_match('#' . $regex . '#', $input);

  return $boolRegex;
}

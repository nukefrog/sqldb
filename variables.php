<?php

$site = "Rennes" ;
echo 'bienvenue sur la page de saisie du site de ' . $site;
$estCeVrai = true;
$ageLimite = 12;
$age = 13;

if ($age <= $ageLimite)
{
  echo "Salut Gamin!";
  $autorisationAge = "Oui";
} else
{
  echo "tu As dépassé l'age pour entrer ici";
  $autorisationAge = "Non";
}
echo 'avez vous l\'autorisation d\'entrer? la réponse est: ' . $autorisationAge;

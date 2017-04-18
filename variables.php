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
$note = 10;

//condition switch

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;

    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;

    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;

    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;

    case 12:
        echo "Tu es assez bon";
    break;

    case 16:
        echo "Tu te débrouilles très bien !";
    break;

    case 20:
        echo "Excellent travail, c'est parfait !";
    break;

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
// Condition ternaire

$age = 24;

$majeur = ($age >= 18) ? true : false;

// boucle While

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

// Boucle For ( exemle incrementation de 2 en 2)

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes += 2)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}

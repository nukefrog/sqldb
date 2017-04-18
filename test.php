<!DOCTYPE html>
<html>
<head>
  <title> Ceci est une page de test avec du PHP </title>
  <meta charset="utf-8" />
  <meta name="description" content="Un chiffre aléatoire va être choisi entre 1 et 10 grâce au code PHP qui suit : <?php echo rand(1, 10); ?>" />
</head>
<body>
  <h2> Page de Test </h2>
  <p>
    Cette Page Contient du code HTML et du PHP <br />
    <?php echo "Test PHP"; ?>
    Voici Quelques petits Tests :
  </p>
  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y H:i:s'); echo "semaine ";echo date(W); ?>.</p>
  <p><?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?></p>
  

  <ul>
    <li style="color: blue;"> Texte en Bleu </li>
    <li style="color: red;"> Texte en Rouge </li>
    <li style="color: green;"> Texte en vert </li>
  </ul>


</body>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Tableaux TP3</title>
    </head>
    <body>
  <?php
      /* Tableaux assignés a des variables */
      $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
      $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
      $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
      $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
      /* Je créer une fonction et je lui donne un paramètre */
      function showArray($board){
          /* J'assigne a une variable la valeur de la clé "name" du tableau accroché? à mon paramètre */
          $nameAndFirstName = '<p>' . $board['name'] . ' ' . $board['firstname'] . '</p>';
          /* Je met l'url de l'image de mon tableau dans une balise img pour qu'il puisse s'afficher */
          $pictures = '<img src=" ' . $board['portrait'] . '" alt="portrait de personnage célèbre" title="Portrait de personnage célèbre"/>';
          /* La fonction retournera les données du tableau */
          return $nameAndFirstName . ' ' . $pictures;
      };
      /* Je lui demande d'afficher en appeler ma fonction et les données du tableau */
      ?>
        <div><?php echo showArray($portrait1);?></div>           
        <div><?php echo showArray($portrait2);?></div>
        <div><?php echo showArray($portrait3);?></div>
        <div><?php echo showArray($portrait4);?></div>

    </body>
</html>

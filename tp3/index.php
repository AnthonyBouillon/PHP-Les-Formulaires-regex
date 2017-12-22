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
        function showArray($board) {
            $name = $board['name'];
            $firstName = $board['firstname'];
            $pictures = '<img src=" ' . $board['portrait'] . '"' . 'alt="Portrait de personnages célèbres"/>';
            /* La fonction retourne le Nom, Prénom et les portraits */
            return $name . ' ' . $firstName . ' ' . $pictures;
        };
        ?>
        <div>
        <?php
            /*  J'apelle la fonction pour chaque tableau créer au début du body */
            echo showArray($portrait1);
            echo showArray($portrait2);
            echo showArray($portrait3);
            echo showArray($portrait4);
        ?>
        </div>
    </body>
</html>

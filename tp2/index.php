<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"> 
        <title>Formulaire TP2</title>
    </head>
    <body>
        <!-- Les regex assigné aux variables. (majuscule, masjuscule + minuscule + nombres + limitation caractères, nombres, maj + min + accent + tiret.)
        <?php
            /* Seuls les majuscules sont autorisés */
            $name = preg_match('#[A-Z]#', $_POST['name']);
            /* Seuls les majuscules, minuscule, nombres, tiret sont autorisés et sont limité à 16 caractères */
            $firstName = preg_match('#[a-zA-Z0-9_-]{3,16}#', $_POST['firstName']);
            /* Seuls les nombres sont autorisés, limité de 3 à 10 */
            $age = preg_match('#[0-9]$#', $_POST['age']);
            /* Seuls les majuscules, minuscules, nombres et tiret sont autorisés */
            $community = preg_match('#[a-zA-Z0-9-éè _-]#', $_POST['community']);
            /* Si le champ est saisie et que le format est correct : Valide le formulaire */
        ?>
        <h1>Données saisies qui ne s'éfface pas après validation.</h1>
        <!-- Action = envoie les données sur la page correspondante -->
        <form method="POST" action="index.php">
            <fieldset>
                <legend><h2>Remplissez ce formulaire.</h2></legend>
                <!-- Liste déroulante -->
                <label for="citizen">Civilité : </label>
                <select id="citizen" name="citizen">
                    <!-- Si la valeur de l'option est égale a ce qui a était selectionné alors dit se qui a était sélectionné. -->
                    <option value="Monsieur" <?php if('Monsieur'==$_POST['citizen']){echo("selected");}?>>Monsieur</option>
                    <option value="Madame" <?php if('Madame'==$_POST['citizen']){echo("selected");}?>>Madame</option>
                    <option value="Amaphrodite" <?php if('Amaphrodite'==$_POST['citizen']){echo("selected");}?>>Amaphrodite</option>
                </select><br/><br/>
                <!-- Ajouter des values  avec le echo $_POST['?'] pour que les données saisies reste affichés après la validation -->
                <label for="name" class="inputForm">Nom : </label><input type="text" name="name" placeholder="Saisissez votre nom" id="name" value="<?php if (!empty($_POST['name'])){echo $_POST['name'];} ?>" required/><br/>
                <p class="pError"><?php if(!empty($_POST['name']) == $name){echo ' ';}else{echo 'Seuls les lettres majuscules sont autorisées.';};?></p>
                <label for="firstName" class="inputForm">Prénom : </label><input type="text" name="firstName" placeholder="Saisissez votre prénom" id="firstName" value="<?php if (!empty($_POST['firstName'])){echo $_POST['firstName'];} ?>" required/><br/>
                <p class="pError"><?php if(!empty($_POST['firstName']) == $firstName){echo ' ';}else{echo 'Minimum 3 caractères et les accents ne sont pas autorisées.';};?></p>
                <label for="age" class="inputForm">Age : </label><input type="text" name="age" placeholder="Saisissez votre age" id="age" value="<?php if (!empty($_POST['age'])){echo $_POST['age'];} ?>" required/><br/>
                <p class="pError""><?php if(!empty($_POST['age']) == $age){echo ' ';}else{echo 'Seuls les nombres sont autorisées.';};?></p>
                <label for="community" class="inputForm">Société : </label><input type="text" name="community" placeholder="Saisissez votre société si vous en avez" id="community" value="<?php if (!empty($_POST['community'])){echo $_POST['community'];} ?>" required/><br/>
                <p class="pError""><?php if(!empty($_POST['name']) == $name){echo ' ';}else{echo 'Seuls les caractères spéciaux ne sont pas autorisés';};?></p>
                <input type="submit" name="submit" value="Validez" class="submit"/>
            </fieldset>
        </form>
            <!-- PHP récupération des données saisies. -->
            <!-- Affiche les résultats du formulaire et les saisies sont protegés grâce à htmlSpecialChars -->
        <?php  
            if(!empty($_POST['citizen']) AND !empty($_POST['name']) && !empty($_POST['name']) == $name AND !empty($_POST['firstName']) && !empty($_POST['firstName']) == $firstName AND !empty($_POST['age']) && !empty($_POST['age']) == $age AND !empty($_POST['community']) && !empty($_POST['community']) == $community){
        ?>     <p><strong><?php echo 'Civilité : '?></strong><?php echo htmlspecialchars($_POST['citizen']);?></p> 
               <p><strong><?php echo 'Nom : '?></strong><?php echo htmlspecialchars($_POST['name']);?></p>
               <p><strong><?php echo 'Prénom : '?></strong><?php echo htmlspecialchars($_POST['firstName']);?></p>
               <p><strong><?php echo 'Age : '?></strong><?php echo htmlspecialchars($_POST['age']);?></p>
               <p><strong><?php echo 'Société : '?></strong><?php echo htmlspecialchars($_POST['community']);?></p>
        <?php 
            }
         ?>   
            <a href="../tp1/index.php">Précédent</a>&nbsp;
            <a href="../tp3/index.php">Suivant</a>  
    </body>
</html>
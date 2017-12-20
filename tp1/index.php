<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
         <link rel="stylesheet" href="style.css"> 
        <title>Formulaire pour futur aprenant</title>
    </head>
    <body>
            <?php
                // Masquer les erreurs.
                ini_set("display_errors",0);error_reporting(0);
            ?>
         <!-- Regex + la saisie assigné à une variable  -->
            <?php
            $name = preg_match('#[A-Z]#', $_POST['name']);
            $firstName = preg_match('#[a-z]#', $_POST['firstName']);
            $birthDate ;
            $birthCountry = preg_match('#[a-zA-Z]#', $_POST['birthCountry']);
            $nationality = preg_match('#[a-zA-Z]#', $_POST['nationality']);
            $adress = preg_match('#[a-zA-Z0-9]#', $_POST['adress']);
            $email ;
            $tel = preg_match('#[0-9]#', $_POST['tel']);
            $diplome = preg_match('#[a-zA-Z]#', $_POST['diplome']);
            $poleEmploi = preg_match('#[a-z0-9]#', $_POST['poleEmploi']);
            $badge = preg_match('#[0-9]#', $_POST['badge']);
            $link = preg_match('#(((https?|ftp)://(w{3}\.)?)(?<!www)(\w+-?)*\.([a-z]{2,4}))#', $_POST['link']);
            $heroes = preg_match('#[a-zA-Z0-9]#', $_POST['heroes']);
            $hack = preg_match('#[a-zA-Z0-9]#', $_POST['hack']);
            $programmation = preg_match('#[a-zA-Z0-9]#', $_POST['programmation']);            
            ?>
            <!-- /REGEX -->
            <!-- Si le champ n'est pas vide et que que le format est respecté : Afficher les donnés -->
        <?php
        if (!empty($_POST['name']) && !empty($_POST['name']) == $name AND !empty($_POST['firstName']) && !empty($_POST['firstName']) == $firstName AND !empty($_POST['birthDate']) AND !empty($_POST['birthCountry']) && !empty($_POST['birthCountry']) == $birthCountry AND !empty($_POST['nationality']) && !empty($_POST['nationality']) == $nationality AND !empty($_POST['adress']) && !empty($_POST['adress']) == $adress AND !empty($_POST['email']) AND !empty($_POST['tel']) && !empty($_POST['tel']) == $tel AND !empty($_POST['diplome']) && !empty($_POST['diplome']) == $diplome AND !empty($_POST['poleEmploi']) && !empty($_POST['poleEmploi']) == $poleEmploi AND !empty($_POST['badge']) && !empty($_POST['badge']) == $badge AND !empty($_POST['link']) && !empty($_POST['link']) == $link AND !empty($_POST['heroes']) && !empty($_POST['heroes']) == $heroes AND !empty($_POST['hack']) && !empty($_POST['hack']) == $hack AND !empty($_POST['programmation']) && !empty($_POST['programmation']) == $programmation) {
        ?>   <!-- Affiche les données du formulaire et les saisies sont protegés grâce à htmlSpecialChars -->
            <h1>Résultat du formulaire d'incription :</h1>
            <p><strong><?php echo 'Votre nom : '?></strong><?php echo htmlspecialchars($_POST['name']); ?>
            <p><strong><?php echo 'Votre prénom : ' ?></strong><?php echo htmlspecialchars($_POST['firstName']); ?></p>
            <p><strong><?php echo 'Votre date de naissance : ' ?></strong><?php echo htmlspecialchars($_POST['birthDate']); ?></p>
            <p><strong><?php echo 'Votre pays de naissance : ' ?></strong><?php echo htmlspecialchars($_POST['birthCountry']); ?></p>
            <p><strong><?php echo 'Votre nationalité : ' ?></strong><?php echo htmlspecialchars($_POST['nationality']); ?></p>
            <p><strong><?php echo 'Votre adresse : ' ?></strong><?php echo htmlspecialchars($_POST['adress']); ?></p>
            <p><strong><?php echo 'Votre adresse mail : ' ?></strong><?php echo htmlspecialchars($_POST['email']); ?></p>
            <p><strong><?php echo 'Votre numéro de téléphone : ' ?></strong><?php echo htmlspecialchars($_POST['tel']); ?></p>
            <p><strong><?php echo 'Vos diplomes obtenues : ' ?></strong><?php echo htmlspecialchars($_POST['diplome']); ?></p>
            <p><strong><?php echo 'Vos identifiants de pole-emploi : ' ?></strong><?php echo htmlspecialchars($_POST['poleEmploi']); ?></p>
            <p><strong><?php echo 'Votre nombre de badge obtenue : ' ?></strong><?php echo htmlspecialchars($_POST['badge']); ?></p>
            <p><strong><?php echo 'Le lien de votre profil codecademy : ' ?></strong><?php echo htmlspecialchars($_POST['link']); ?></p>
            <p><strong><?php echo 'Votre super héros choisis et pourquoi : ' ?></strong><?php echo htmlspecialchars($_POST['heroes']); ?></p>
            <p><strong><?php echo 'Votre hack : ' ?></strong><?php echo htmlspecialchars($_POST['hack']); ?></p>
            <p><strong><?php echo 'Votre experience en programmation : ' ?></strong><?php echo htmlspecialchars($_POST['programmation']); ?></p>
            <?php
        } else {
            ?>
            <!-- Si les saisies n'existe pas et que le format n'est pas correct, le formulaire reste affiché / le formulaire est dans le else-->
            <h1>Formulaire d'inscription</h1>
            <p class="pForm">Tout les champs comportant un <strong class="star">*</strong> sont obligatoire.</p>
                        <!-- Lien vers le TP suivant -->
            <p class="linkTp"><a href="../tp2/index.php">TP suivant</a></p>
            <form method="POST" action="index.php">
                <fieldset>
                    <!-- Echo dans value, de garder la saisie après un rafraichissement -->
                    <label for="name" class="inputForm">Nom <strong class="star">*</strong> : </label><input type="text" name="name" placeholder="Ecrivez votre nom" id="name" value="<?php if (!empty($_POST['name'])){echo $_POST['name'];} ?>" required/><br/>
                    <!-- Message d'erreur si le format n'est pas respecté / !empty = Si le champ n'est pas vide.. -->
                    <p style="color:red;"><?php if(!empty($_POST['name']) == $name){echo ' ';}else{echo 'Seuls les lettres majuscules sont autorisées.';};?></p>
                    
                    <label for="firstName" class="inputForm">Prénom <strong class="star">*</strong></div> : </label><input type="text" name="firstName" placeholder="Écrivez votre prénom" id="firstName" value="<?php if (!empty($_POST['firstName'])){echo $_POST['firstName'];} ?>" required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['firstName']) == $firstName){echo ' ';}else{echo 'Seuls les lettres minucules sont autorisées.';};?></p>
                    
                    <label for="birthDate" class="inputForm">Date de naissance <strong class="star">*</strong> : </label><input type="date" name="birthDate" id="birthDate" value="<?php if (!empty($_POST['birthDate'])){echo $_POST['birthDate'];} ?>"/><br/>

                    <label for="birthCountry" class="inputForm">Pays de naissance <strong class="star">*</strong> : </label><input type="text" name="birthCountry" placeholder="Écrivez le pays d'où vous êtes née" id="birthCountry" value="<?php if (!empty($_POST['birthCountry'])){echo $_POST['birthCountry'];} ?>" required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['birthCountry']) == $birthCountry){echo ' ';}else{echo 'Seuls les lettres majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="nationality" class="inputForm">Nationalité <strong class="star">*</strong> : </label><input type="text" name="nationality" placeholder="Écrivez votre nationalité" id="nationality" value="<?php if (!empty($_POST['nationality'])){echo $_POST['nationality'];} ?>" required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['nationality']) == $nationality){echo ' ';}else{echo 'Seuls les lettres majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="adress" class="inputForm">Adresse <strong class="star">*</strong> : </label><input type="text" name="adress" placeholder="Écrivez l'adresse de votre résidence" id="adress" value="<?php if (!empty($_POST['adress'])){echo $_POST['adress'];} ?>" required//><br/>
                    <p style="color:red;"><?php if(!empty($_POST['adress']) == $adress){echo ' ';}else{echo 'Seuls les nombres, majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="email" class="inputForm">Email <strong class="star">*</strong> : </label><input type="email" name="email" placeholder="Écrivez votre adresse mail" id="email" value="<?php if (!empty($_POST['email'])){echo $_POST['email'];} ?>" required//><br/>
                    
                    <label for="tel" class="inputForm">Téléphone <strong class="star">*</strong> : </label><input type="tel" name="tel" placeholder="Écrivez votre numéro de téléphone" id="tel" value="<?php if (!empty($_POST['tel'])){echo $_POST['tel'];} ?>" required//><br/>
                    <p style="color:red;"><?php if(!empty($_POST['tel']) == $tel){echo ' ';}else{echo 'Seuls les nombres de 0 à 9 sont autorisées.';}; ?></p>
                    
                    <label for="diplome" class="inputForm">Diplome : </label><input type="text" name="diplome" placeholder="Écrivez vos diplomes si vous en avez" id="diplome" value="<?php if (!empty($_POST['diplome'])){echo $_POST['diplome'];} ?>"/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['diplome']) == $diplome){echo ' ';}else{echo 'Seuls les majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="poleEmploi" class="inputForm">Numéro pôle emploi <strong class="star">*</strong> : </label><input type="text" name="poleEmploi" placeholder="Écrivez votre numéro d'identifiant de pole-emploi" id="poleEmploi" value="<?php if (!empty($_POST['poleEmploi'])){echo $_POST['poleEmploi'];} ?>" required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['poleEmploi']) == $poleEmploi){echo ' ';}else{echo 'Seuls les nombres, minuscules sont autorisées.';}; ?></p>
                    
                    <label for="badge" class="inputForm">Nombre de badge <strong class="star">*</strong> : </label><input type="text" name="badge" placeholder="Écrivez le nombre de badge obtenue" id="badge" value="<?php if (!empty($_POST['badge'])){echo $_POST['badge'];} ?>"required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['badge']) == $badge){echo ' ';}else{echo 'Seuls les nombres de 0 à 9 sont autorisées.';}; ?></p>
                    
                    <label for="link" class="inputForm">Liens codecademy <strong class="star">*</strong> : </label><input type="text" name="link" placeholder="Copier coller votre lien de profil codecademy" id="link" value="<?php if (!empty($_POST['link'])){echo $_POST['link'];} ?>" required/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['link']) == $link){echo ' ';}else{echo 'Seuls les liens de type http://www.exemple.com sont autorisées.';}; ?></p>
                    
                    <label for="heroes">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? <strong class="star">*</strong> : </label><br/><textarea type="text" name="heroes" placeholder="Un grand pouvoir implique ou pas de grande responsabilité" id="heroes" cols="85" rows="5" value="<?php if (!empty($_POST['heroes'])){echo $_POST['heroes'];} ?>" required></textarea><br/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['heroes']) == $heroes){echo ' ';}else{echo 'Seuls les nombres, majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <strong class="star">*</strong> : </label><br/><textarea type="text" name="hack" placeholder="Un conseil.. regardez la définition avant de répondre" id="hack" cols="85" rows="5" value="<?php if (!empty($_POST['hack'])){echo $_POST['hack'];} ?>" required></textarea><br/><br/>
                    <p style="color:red;"><?php if(!empty($_POST['hack']) == $hack){echo ' ';}else{echo 'Seuls les nombres, majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <label for="programmation">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique<br/> avant de remplir ce formulaire ? <strong class="star">*</strong> : </label><br/><textarea type="text" name="programmation" placeholder="Soyez honnête et n'hésitez pas à détailler" id="programmation" cols="85" rows="5" value="<?php if (!empty($_POST['programmation'])){echo $_POST['programmation'];} ?>" required></textarea><br/>
                    <p style="color:red;"><?php if(!empty($_POST['programmation']) == $programmation){echo ' ';}else{echo 'Seuls les nombres, majuscules et minuscules sont autorisées.';}; ?></p>
                    
                    <input type="submit" name="submit" value="Validez"/>
                </fieldset>
            </form> 
        <?php
            }
        ?>             
    </body>
</html>

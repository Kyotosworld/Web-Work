<?php include('HTML-HEAD'); ?>

                                        <pre>
<form method="post" action="cookie.php">
Ce formulaire a pour but d'améliorer le contenu des liens de navigation :
                <h2> Informations de base :</h2>

        <input type="hidden" name="form" value="cookie.php" />
        <label for="pseudo">Pseudo :</label><input class="depth" type="text" name="USER_pseudo" id="pseudo" value="Kyoto" />
        <label for="password">Password :</label><input class="depth" type="password" name="USER_password" id="password" />
        <label for="name">Prénom :</label><input class="depth" type="text" name="USER_name" id="name" />
        <label for="surname">Nom :</label><input class="depth" type="text" name="USER_surname" id="surname" />
        <label for="age">Age :</label><input class="depth" type="text" name="USER_age" id="age" />

                <label for="message">Bio :</label>
                <textarea class="depth" name="USER_bio" id="message" rows="8" cols="45" ></textarea>

        <input class="metro" type="submit" value="Envoyer" />
</form>
                                        </pre>
<?php include('HTML-TAIL'); ?>

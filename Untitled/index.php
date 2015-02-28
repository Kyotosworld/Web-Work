<?php

        include('HTML-HEAD');

        echo '                          <pre>
<a class="inline-link" href="sql-form.php">Traiter la table jeux_video de la base de données</a><br />';

                /* Si le cookie du formulaire est défini, toutes les valeurs existent */
        if(isset($_COOKIE['form:cookie_php'])) {
//      if(array_key_exists('form:cookie_php', $_COOKIE)) {
//      if ($_COOKIE['form:cookie_php'] == true) {
                echo 'Pseudo : '.$_COOKIE['pseudo'].'<br />';
                echo 'Password : '.$_COOKIE['password'].'<br />';
                echo 'Nom : '.$_COOKIE['name'].' '.$_COOKIE['surname'].'<br />';
                echo 'Age : '.$_COOKIE['age'].'<br />';
                echo 'Biographie : '.$_COOKIE['bio'].'<br />';
        }
        else {
                echo 'Les données d\'utilisateurs ne sont pas renseignées....
Veuillez remplir <a href="cookie-form.php">ce formulaire</a> pour pouvoir accéder à vos informations';

                print_r($_COOKIE);
        }

        echo '                          </pre>';
        include('HTML-TAIL');
?>

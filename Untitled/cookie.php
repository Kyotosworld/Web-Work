<?php

if(isset($_POST['form']) && ((string)$_POST['form'] == $_POST['form']) && $_POST['form'] == 'cookie.php' &&
isset($_POST['USER_pseudo'], $_POST['USER_password'], $_POST['USER_name'], $_POST['USER_surname'], $_POST['USER_age'], $_POST['USER_bio'])) {

        if($_POST['USER_pseudo'] != '' && $_POST['USER_password'] != '' && $_POST['USER_name'] != '' && $_POST['USER_surname'] != '' && $_POST['USER_age'] != '' && $_POST['USER_bio'] != '') {
                setcookie('form:cookie_php', true, time()+3600*24*365, null, null, false, true);
                setcookie('pseudo', htmlspecialchars($_POST['USER_pseudo']), time()+3600*24*365, null, null, false, true);
                setcookie('password', htmlspecialchars($_POST['USER_password']), time()+3600*24*365, null, null, false, true);
                setcookie('name', htmlspecialchars($_POST['USER_name']), time()+3600*24*365, null, null, false, true);
                setcookie('surname', htmlspecialchars($_POST['USER_surname']), time()+3600*24*365, null, null, false, true);
                setcookie('age', htmlspecialchars($_POST['USER_age']), time()+3600*24*365, null, null, false, true);
                setcookie('bio', htmlspecialchars($_POST['USER_bio']), time()+3600*24*365, null, null, false, true);

                include('HTML-HEAD');
                echo '<pre>
<h2>Vos données ont bien été enregistrées</h2><br />
<a class="inline-link" href="index.php">Retourner à l\'index du site</a>';
                print_r($_COOKIE);
                echo '</pre>';
                include('HTML-TAIL');
        }
        else {
                include('cookie-form.php');
        }
}
        // Si les données ne correspondent pas, elles ont été modifiées à la main par l'utilisateur, le champ 'form' est caché
else {
        include('HTML-HEAD');
        echo '<pre>
                        <h2>INTERDICTION DE TRAFIQUER LES DONNES ENVOYEES</h2><br />
                                <a class="inline-link" href="index.php">Retourner à l\'index du site</a>
                </pre>';
        include('HTML-TAIL');
} ?>

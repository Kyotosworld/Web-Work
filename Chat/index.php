<?php session_start(); ?>

<!DOCTYPE html>

<html>
        <head>
                <meta charset="utf-8">
                <title>TP-Chat</title>
        </head>

        <body>
                <h2 style="font-style: center;">Chat</h2><br />

<?php
        try {
                $DATABASE = new PDO('mysql:host=localhost;dbname=kyoto-base;', 'root', '',
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (Exception $e) {
                die('Erreur : '.$e->getMessage());
        }

        $data = $DATABASE->query('SELECT pseudo, message FROM TP_chat');

        echo '<div style="margin: 10px 0 10px 0; border: 2px black solid;">';
        $i = -1;

        while($line = $data->fetch()) {
                $i++;
                $cut_line[$i] = '<p><span style="color: blue">'.htmlspecialchars($line['pseudo']).'</span> : '.htmlspecialchars($line['message']).'</p>';
        }

        $j = $i - 9;
        for($j; $j <= $i; $j++)
                echo $cut_line[$j];

        $data->closeCursor();
        echo '</div>';

?>

                <form action="index-post.php" method="post">
<?php   if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] != '')
                echo '<label for="a">Pseudo : </label><input type="text" name="pseudo" id="a" value="'.$_SESSION['pseudo'].'" />';
        else
                echo '<label for="a">Pseudo : </label><input type="text" name="pseudo" id="a" />';
?>
                        <textarea style="display: block" rows="9" cols="50" name="message" placeholder="Ecrivez votre message ici"></textarea>
                        <input id="button" type="submit" value="Poster" />
                </form>
        </body>
</html>


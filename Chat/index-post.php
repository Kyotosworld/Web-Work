<?php
        session_start();

        try {
                $DATABASE = new PDO('mysql:host=localhost;dbname=kyoto-base;', 'root', '',
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (Exception $e) {
                die('Erreur : '.$e->getMessage());
        }

        if(isset($_POST['pseudo'], $_POST['message']) && $_POST['pseudo'] != '' && $_POST['message'] != '') {
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $query = $DATABASE->prepare('INSERT INTO TP_chat(pseudo, message) VALUES(:pseudo, :message)');
                $query->execute(array('pseudo' => $_POST['pseudo'], 'message' => $_POST['message']));
        }

        header('Location: index.php#button');
?>


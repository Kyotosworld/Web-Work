<?php
        if(isset($_POST['form']) && ((string)$_POST['form'] == $_POST['form']) && $_POST['form'] == 'sql_php') {
                
                include('HTML-HEAD');
                echo '<pre>';

                try {
                        $DATABASE = new PDO('mysql:host=localhost;dbname=kyoto-base;', 'root', '',
                                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                }
                catch (Exception $e) {
                        die('Erreur : '.$e->getMessage());
                }

                $select_values = array('ID', 'nom', 'possesseur', 'console', 'prix', 'commentaires');
                $select = '';
                $i = 0;
                for($i=0; $i<6; $i++) {
                        if(isset($_POST[$select_values[$i]])) {
                                if($select == '')
                                        $select = $select_values[$i];
                                else
                                        $select = $select.', '.$select_values[$i];
                        }
                }

                echo 'Finally, $select = '.$select.'<br /><br />';

                $data = $DATABASE->query('SELECT '.$select.' FROM jeux_video');

                $i = 0;
                while ($line = $data->fetch()) {
                        $i++;
                        echo '          Résultat n°'.$i.'<br />';
                        foreach ($line as $line_name => $line_value) {
                                if(in_array($line_name, $select_values) && $line_name != '')
                                        echo $line_name.' : '.$line_value.'<br />';
                        }
                        echo '<br /><br />';
                }
                $data->closeCursor();

                echo '</pre>';
                include('HTML-TAIL');
        }
        else { 
                include('sql-form.php');
        }
?>

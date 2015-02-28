<?php

        header("Content-Type: text/html");// un petit header pour ne pas que tout se mélange 

        mysql_connect("localhost", "root", "");
        mysql_select_db("kyoto-base");

        if ( isset($_GET['action']) AND $_GET['action'] == "refresh") {
                $requete = "SELECT * FROM tchat ORDER BY ID DESC";
                $reponse = mysql_query($requete) or die (mysql_error());
                $texte = "";

                while($donnees = mysql_fetch_array($reponse)) {
                        $texte = "De ".$donnees['pseudo']." a ".$donnees['heure']."<br />".$donnees['message']."<br /><HR><br />";

                        if($texte != "") {
                                echo $texte;
                        }
                        else
                                echo "Il n'y a pas de message";
                }
        }

        elseif ( isset($_GET['action']) AND isset($_GET['pseudo']) AND isset($_GET['message']) 
        AND $_GET['pseudo'] != "" AND $_GET['message'] != "" AND $_GET['action'] == "envoi" ) {
                $message  = mysql_real_escape_string(htmlspecialchars($_GET['message']));
                $heure = strftime("%Hh%M");
                $pseudo = mysql_real_escape_string(htmlspecialchars($_GET['pseudo']));

                $requete  = "INSERT INTO tchat VALUES('$pseudo','$message','$heure','')";
                mysql_query($requete) or die (mysql_error());

                echo "Message envoyé";
        }
        else
                echo "Le message n'a pas pu être envoyé";
?> 

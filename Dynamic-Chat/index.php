<!DOCTYPE html>

<html>
        <head>
                 <script type="text/javascript" src="jquery-2.1.1.min.js"></script>
        </head>

        <body>
                <div id="Tchat" style="height: 400px; width: 500px; overflow: auto;
                                        border:3px double silver;padding:5px;">
                </div><br />

                <input type="text" id="pseudo" placeholder="Pseudo" /><br />
                <input type="text" id="message" placeholder="Ecrivez votre message" /><br />
                <input type="button" value="Envoyer" onclick="envoi();" /><br />
                <div id="etat"></div>

                <script language="javascript" type="text/javascript">
                        function refreshTchat(){
                                $.ajax ({
                                        type: "GET",
                                        url: "refresh.php",
                                        data: "action= refresh",
                                        success: function(msg) {
                                                document.getElementById("Tchat").innerHTML = msg;
                                        }
                                });

                                setTimeout("refreshTchat()",3000); // Relancer refreshTchat toutes 3000 millisecondes
                        }

                        function envoi(){
                                var message = document.getElementById("message").value;
                                var pseudo = document.getElementById("pseudo").value;
                                $.ajax ({
                                        type: "GET",
                                        url: "refresh.php",
                                        data: "action= envoi & message= "+message+" & pseudo="+pseudo,
                                        success: function(msg) {
                                                document.getElementById("etat").innerHTML = msg;
                                        }
                                });
                        }

                        refreshTchat();
                </script>
        </body>
</html> 

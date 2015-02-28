Explication AJAX :

type: "GET" veut dire qu'on va lui passer les variable que l'on veut via "data", ici on envoi action=refresh, ce qui sera reçu par la page "refresh.php" (url) que l'on fera plus tard !!

success = lorsque la requête a bien était transmise et que la réponse est revenu, vous voyez alors function(msg), msg est la réponse que vous avez envoyée pour la requête, ce qu'on fera aussi dans la partie php.

Après c'est simple, on va afficher la réponse dans une <div id="Tchat"></div>, qui sera les messages du tchat !

Pour le reste, la partie envoi est pareil que celle du rafraichissement, sauf l'action qui est envoi et puis on va juste afficher l'état de la requête, par exemple si le message est pas envoyé, la page php nous retourne " pas envoyé" et ce script affiche ce dernier texte dans la <div id="etat"></div>

Si vous ne comprenez pas document.getElementById allez voir le tuto de la section Developpement javascript :) 

<?php include('HTML-HEAD'); ?>
<pre>
<form action="sql.php" method="post">
<input type="hidden" name="form" value="sql_php" />

<table>
        <td>
                SELECT : <input type="checkbox" name="ID" id="a"/><label for="a">ID</label>
                         <input type="checkbox" name="nom" id="b"/><label for="b">nom</label>
                         <input type="checkbox" name="possesseur" id="c"/><label for="c">possesseur</label>
                         <input type="checkbox" name="console" id="d"/><label for="d">console</label>
                         <input type="checkbox" name="prix" id="e"/><label for="e">prix</label>
                         <input type="checkbox" name="commentaires" id="f"/><label for="f">commentaires</label>
        </td>
        <td>
                WHERE : <input type="radio" name="filter" value="ID" id="g"><label for="g">ID</label>
                        <input type="radio" name="filter" value="nom" id="h"><label for="h">nom</label>
                        <input type="radio" name="filter" value="possesseur" id="i"><label for="i">possesseur</label>
                        <input type="radio" name="filter" value="console" id="j"><label for="j">console</label>
                        <input type="radio" name="filter" value="prix" id="k"><label for="k">prix</label>
                        <input type="radio" name="filter" value="commentaires" id="l"><label for="l">commentaires</label>
        </td>
        <td>
        </td>
</table>

<input class="metro" type="submit" value="Requête" />
</form>
</pre>
<?php include('HTML-TAIL'); ?>

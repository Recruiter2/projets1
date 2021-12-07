<fieldset>
    <legend><h2>
        Média
    </h2></legend>
<form action = "." method = "post">
        <?php
            $tab = ["culture","Art","Sport","Cuisine","Education","Science","Autre"];
            echo "<p class=\"post-text\"><strong>Titre :</strong>".$_SESSION['titre']."</p>";
            echo "<p class=\"post-text\"><strong>Catégorie :</strong>".$tab[$_SESSION['categorie']-1]."</p>";
        ?>
<input type="hidden" name="action" value="creer_media">
<p class="post-info"><strong>Information : </strong></p>
<textarea type = "text" name="information" class="post-control"></textarea>
<input type = "submit" value = "creer un post" class="cnx-sub">
</form>
</fieldset>
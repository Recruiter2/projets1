<fieldset>
    <legend><h2>Créer un media</h2></legend>
<form action = "." method = "post">
<input type="hidden" name="action" value="proposer_media">
<label>titre :</label>
<input type = "text" name="titre" class="cnx-control" required><br>
<label>categorie :</label>

<select id="triselect" name="categorie" class="cnx-control" required>
        <option selected disabled>choisir une catégorie</option>
        <option value="1">culture</option>
        <option value="2">Art</option>
        <option value="3">Sport</option>
        <option value="4">Cuisine</option>
        <option value="5">Education</option>
        <option value="6">Science</option>
        <option value="7">Autre</option>
</select>
<input type = "submit" value = "proposer un post" class="cnx-sub">
</form>
</fieldset>

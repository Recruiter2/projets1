<main>
    <form method="post" action=".">
        <input type="hidden" name="action" value="categorie">
        <label for="triselect">Trier par :</label>
        <select id="triselect" name="selcath" class="tri-select">
            <option value="0">toutes catégories</option>
            <option value="1">culture</option>
            <option value="2">Art</option>
            <option value="3">Sport</option>
            <option value="4">Cuisine</option>
            <option value="5">Education</option>
            <option value="6">Science</option>
            <option value="7">Autre</option>
        </select>
        <button class="tri-sub">valider</button>
    </form>
    <?php
        if(isset($_GET["catego"])){
            $categorie = $_GET["catego"];
        }
        else{
            $categorie = 0;
        }
        afficher_topic($categorie);
    ?>
</main>

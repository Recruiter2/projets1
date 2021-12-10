<fieldset>
    <legend><h2>commentaires</h2></legend>
<?php
     if(isset($_GET["media"])){
        $media = $_GET["media"];
        Titre_media($media);
        echo '<div class="com-container">';
        Afficher_com($media);
?>

</div>

<?php
    if(isset($_SESSION["id_user"])){
        $user = $_SESSION["id_user"];
        echo "
        <form method=\"post\" action=\".\" class=\"com-form\">
        <input type=\"hidden\" name=\"action\" value=\"envoi_com\">
        <input type=\"hidden\" name=\"user\" value=\"".$user."\">
        <input type=\"hidden\" name=\"media\" value=\"".$media."\">
        <input type=\"text\" name=\"titre\" placeholder=\"titre du commentaire\" required>
        <input type=\"text\" name=\"text\" placeholder=\"entrer votre commentaire\" required>
        <button>envoyer</button>
    </form>
        ";
    }
 }
?>

</fieldset>
<?php
     if(isset($_GET["media"])){
        $media = $_GET["media"];
        Afficher_com($media);

    if(isset($_SESSION["id_user"])){
        $user = $_SESSION["id_user"];
        echo "
        <form method=\"post\" action=\".\">
        <input type=\"hidden\" name=\"action\" value=\"envoi_com\">
        <input type=\"hidden\" name=\"user\" value=\"".$user."\">
        <input type=\"hidden\" name=\"media\" value=\"".$media."\">
        <input type=\"text\" name=\"titre\" placeholder=\"titre du commentaire\">
        <input type=\"text\" name=\"text\" placeholder=\"entrer votre commentaire\">
        <button>envoyer</button>
    </form>
        ";
    }
 }
?>
<body>
<div id="container">
<fieldset >
    <legend><h2>commentaires</h2></legend>
<?php
     if(isset($_GET["media"])){
        $media = $_GET["media"];
        Titre_media($media);
        echo '<div id="info_text_com" class="com-container">';
        Afficher_com($media);
    echo "</div>";
    if(isset($_SESSION["id_user"])){
        $user = $_SESSION["id_user"];
        echo "
        <form method=\"post\" action=\".\" class=\"com-form\">
        <input type=\"hidden\" name=\"action\" value=\"envoi_com\">
        <input type=\"hidden\" name=\"user\" value=\"".$user."\">
        <input type=\"hidden\" name=\"media\" value=\"".$media."\">
        <input id='chat_textbox' type=\"text\" name=\"titre\" placeholder=\"titre du commentaire\" required >
        <input id='chat_textbox' type=\"text\" name=\"text\" placeholder=\"entrer votre commentaire\" required >
        <button class='button1'>envoyer</button>
    </form>
        ";
    }else{
        echo "<p style=\"text-align:center;margin-bottom:0px;\"><a href =\" index.php?page=connexion\" style=\"color:red;\">
        connectez-vous</a> pour commenter</p>";
    }
 }
?>
</fieldset>
</div>
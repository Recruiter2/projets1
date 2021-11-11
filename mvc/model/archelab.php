<?php

function ajouterUser($pseudo, $email, $mdp, $c) {
    global $c;
    $sql = "insert into users (pseudo, mdp, email) VALUES ( $pseudo, $mdp, $email);";
    mysqli_query($c, $sql);
    echo'rein du tuut';
}

function incription_formulaire() {
    ?>
<h2>Creer compte</h2>

<form action = "controller/action.php" method = "post">
    <input type="hidden" name="action" value="add">
    <p>Pseudo :</p>
    <input type = "text" name="user">
    <p>Email :</p>
    <input type = "email" name="email">
    <p>Mot de passe :</p>
    <input type = "text" name="mdp">
    <br>
    <input type = "submit" value = "creer">
</form>

<?php
}
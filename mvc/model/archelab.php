<?php

function ajouterUser($c) {
    //global $c;
    if (isset($_POST["action"])) {

        //---------------------------------------------
        if ($_POST["action"] == "add") {

            $pseudo = mysqli_real_escape_string($c, $_POST["user"]);
            $mdp = mysqli_real_escape_string($c, $_POST["mdp"]);
            $email = mysqli_real_escape_string($c, $_POST["email"]);
            /*= $_POST['user'];
            = $_POST['mdp'];
            = $_POST['email'];*/
            $sql = "INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`) VALUES (NULL, '$pseudo', '$mdp', '', '$email');";
            mysqli_query($c, $sql);
            //echo 'rein du tuut';
            //var_dump($sql);
        }
    }
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
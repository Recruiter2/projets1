<?php
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
//formulaire de création de compte
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['user']) && isset($_POST['email'])  && isset($_POST['mdp'])){
            if ($_POST['mdp'] !="" && $_POST['user']!="" && $_POST['email'] != "") {
                ajouterUser($_POST["user"], $_POST["email"], $_POST["mdp"]);
                //echo 'ok';
                header("Location: ../?page=connexion");
            }
            else{
                echo'information incorect';
            }

        }
    }
}
//formulaire de connexion
if (isset($_POST["action"])) {
    if ($_POST["action"] == "connexion") {
        if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['pseudo'] != "") {
                $count = connexion($_POST['pseudo'], $_POST['mdp']);
                if ($count != 0) {// nom d'utilisateur et mot de passe correcte
                    //var_dump($count);
                    $_SESSION['username'] = $_POST['pseudo'];
                    echo "Bienvenu " . $_SESSION['username'];
                    //header("Location: .");
                } else {
                    echo "err1 erreur sur le mot de passe ou pseudo";
                    echo "2 eme possibilité : erreur vous êtes déjà connecté en tant que : ";
                    var_dump($_SESSION);
                    //header("Location: ./?page=connexion");
                }
            }
                else {
                    echo "Vous êtes connecté en tant que " . $_SESSION['username'] . "  ";
                    echo "err2 vous etes deja connecte?";
                    //header("Location: ./?page=connexion");

            }
            }
        }
    }

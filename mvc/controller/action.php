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
        echo 'ok';
        if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['pseudo'] != "") {
                $count = get_all_account($_POST['pseudo'], $_POST['mdp']);
                if ($count != 0) // nom d'utilisateur et mot de passe correctes
                {
                    $_SESSION['username'] = $_POST['pseudo'];
                    echo $_SESSION['username'];
                    header("Location: .");
                }
            } else {
                echo "err";
                header("Location: ../?page=connexion");
            }
        }
    }
}
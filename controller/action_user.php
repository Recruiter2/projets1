<?php
if (isset($_GET["connecte"]) && $_GET["connecte"] == "false") {

    var_dump($_SESSION);

    //var_dump($_SESSION);

    unset($_SESSION['username']);
    unset($_SESSION['connecte']);
    unset($_SESSION['role']);
    session_destroy();
    //$_SESSION['connecte'] = false;
    //var_dump($_SESSION);
    header('location:.');
}


$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


//formulaire de création de compte
if (isset($_POST["action"])) {
    if ($_POST["action"] == "add") {
        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['mdp'])) {
            if ($_POST['mdp'] != "" && $_POST['user'] != "" && $_POST['email'] != "") {
                ajouterUser($_POST["user"], $_POST["email"], $_POST["mdp"]);
                //echo 'ok';
                header("Location: ./?page=connexion");
            } else {
                echo 'information incorect';
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
                    $_SESSION['connecte'] = true;
                    $_SESSION['role'] = recup_role($_POST['pseudo']);
                    $_SESSION['id_user'] = recup_id_user($_POST['pseudo']);
                    $_SESSION['loggedin'] = true;

                    //var_dump($_SESSION['role']);

                    //var_dump($_SESSION['role']);
                    //if (isset($_SESSION['username'])) {
                        //echo "<p>Bienvenu " . $_SESSION['username'] . "</p>";
                    //}
                    //header("Location: .");
                } else {
                    echo "Erreur sur le mot de passe ou pseudo";
                    //echo "2 eme possibilité : erreur vous êtes déjà connecté en tant que : ";
                    //var_dump($_SESSION);
                    //header("Location: ./?page=connexion");
                }
            } else {
                echo "erreur";
                //echo " vous etes deja connecte?";
                header("Location: ./?page=connexion");

            }
        }
    }
}


//formulaire de modification de compte

if (isset($_POST["action"]) && $_POST["action"] == "modifier" ) {
    if ( isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['user']) && !($_POST['mdp'] == "")
        && !($_POST['email'] == "") && !($_POST['user'] == "")) {

        $check_role = recup_role($_SESSION["username"]);
        $check_admin = recup_id_user($_SESSION["username"]);
if (isset($_SESSION["id"][0]) && !($check_admin == "admin") ) {
    $id = $check_role; // $id is now defined
    $password = $_POST['mdp'];
    $mail = $_POST['email'];
    $pseudo =  $_POST['user'];
    modification_compte($id, $pseudo, $password, $mail); 
    echo "votre compte a été modifié.";

}

    }
    else {
        echo "info incomplet";
        //header("location: .?page=modifier");
        //echo "info incomplet";
    }

}



//formulaire de suppression de compte

if (isset($_GET["id"])) {
    $check_id = recup_id_user($_SESSION["username"]);
    $id = $check_id; // $id is now defined
    //echo $id;
    suppression($id, $_SESSION["username"]);
    //var_dump($_SESSION['role'], $_SESSION["username"]);
    //mysqli_close($c);
    //session_destroy();

}
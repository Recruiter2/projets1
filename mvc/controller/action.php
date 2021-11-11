<?php
include_once "../model/archelab.php";
if ($_POST["action"] == "add") {

    ajouterUser($_POST['user'],
        $_POST['email'], $_POST['mdp']);
    echo 'ok';
}
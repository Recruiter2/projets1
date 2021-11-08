<?php
include_once "controller.php";
if ($_POST["action"] == "add") {

    ajouterUser($_POST['user'], $_post['email'], $_post['mdp']);
    echo 'ok';
}
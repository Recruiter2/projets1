<?php
include_once "../db.php";
include_once "../model/archelab.php";
if ($_POST["action"] == "add") {

    ajouterUser($c);
    //echo 'ok';
}

header("Location: ../?page=connexion");
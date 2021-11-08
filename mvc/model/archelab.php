<?php

function ajouterUser($pseudo, $email, $mdp, $c) {
    global $c;
    $sql = "insert into users (pseudo, mdp, email) VALUES ( $pseudo, $mdp, $email);";
    mysqli_query($c, $sql);
    echo'rein du tuut';
}
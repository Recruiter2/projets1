<?php

function ajouterUser($user,$email,$mdp) {
    global $c;
    //if (isset($_POST["action"])) {

        //---------------------------------------------
        //if ($_POST["action"] == "add") {

            $pseudo = mysqli_real_escape_string($c, $user);
            $mdp = mysqli_real_escape_string($c, $mdp);
            $email = mysqli_real_escape_string($c, $email);
            /*= $_POST['user'];
            = $_POST['mdp'];
            = $_POST['email'];*/
            $sql = "INSERT INTO `users` (`id`, `pseudo`, `mdp`, `role`, `email`) VALUES (NULL, '$pseudo', '$mdp', '', '$email');";
            mysqli_query($c, $sql);
            //echo 'rein du tuut';
            //var_dump($sql);



}
function connexion($pseudo,$mdp) {
    global $c;
    //$sql = "SELECT * FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $sql = "SELECT count(*) FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    //var_dump($sql);

    $reponse = mysqli_fetch_array($exec_requete);
    return $reponse['count(*)'];
    /*$res = [];
    while($row = mysqli_fetch_assoc($result)){
        $res[] = $row;
    }
    return $res;*/
}



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

            //var_dump($sql);



}
function connexion($pseudo,$mdp) {
    global $c;
    //$sql = "SELECT * FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $sql = "SELECT count(*) FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);

//    echo "<br>";
//    var_dump($sql);
//    echo "<br>";
//    var_dump($exec_requete);
//    echo "<br>";
    $reponse = mysqli_fetch_array($exec_requete);

    //var_dump($reponse);

    $sql = "SELECT id FROM `users` WHERE `pseudo` = '" . $pseudo . "' and `mdp`= '". $mdp ."'" ;
    $exec_requete = mysqli_query($c,$sql);
    $reponse2 = mysqli_fetch_array($exec_requete);
    $_SESSION['id'] = $reponse2;

    return $reponse['count(*)'];
    return $_SESSION;



    var_dump($exec_requete);
    /*$res = [];
    while($row = mysqli_fetch_assoc($result)){
        $res[] = $row;
    }
    return $res;*/
}


function delete_user_db($c) {

    //if ($_GET["action"] == "delete") {

    // requête DELETE
    // Check connection

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_GET["id"])) {
        $id = $_GET['id']; // $id is now defined
        //echo $id;
        $sql = "DELETE FROM users WHERE id='".$id."'";
        //echo $sql;
        mysqli_query($c,$sql);
        //mysqli_close($c);
        session_destroy();
    };
// or assuming your column is indeed an int
// $id = (int)$_GET['id'];



    //}
    //}

}



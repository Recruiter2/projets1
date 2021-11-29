<?php
// debug section
session_start();
include "../db.php";
echo "reached modifier.php";
var_dump($_SESSION["id"][0]);
echo "</br>";
if (isset($_SESSION["id"][0])) {
    $id = $_SESSION['id'][0]; // $id is now defined
    $password = $_POST['mdp'];
    $mail = $_POST['email'];
    $pseudo =  $_POST['user'];
    //echo $id;
    $sql = "UPDATE `users` SET `mdp` = '".$password."', `email` = '".$mail."', `pseudo` = '".$pseudo."' WHERE `users`.`id` = '".$id."'";
    echo $sql;
    mysqli_query($c,$sql);
    //mysqli_close($c);
    //session_destroy();
    echo "votre compte a été modifié.";
}

<?php

//var_dump($_SESSION ['id'][0]);
//if (match_found_in_database()) {
//    $_SESSION['loggedin'] = true;
//    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
//    // something like this is optional, of course
//}
//var_dump($_SESSION);
echo "<h2>Supprimer mon compte</h2>";
if (isset($_SESSION['connecte'])) {
    if ($_SESSION['connecte'] == true) {
        echo "Appuier sur supprimer pour supprimer votre compte : ";
        echo "<td><a class='button' href=\"index.php?id=" . $_SESSION["id"][0] . "\">Delete</a></td>";
    }
}

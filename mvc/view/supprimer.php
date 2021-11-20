<?php

//var_dump($_SESSION ['id'][0]);
//if (match_found_in_database()) {
//    $_SESSION['loggedin'] = true;
//    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
//    // something like this is optional, of course
//}
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == true) {
        echo "Supprimer mon compte";
        echo "<td><a class='button' href=\"index.php?id=" . $_SESSION["id"][0] . "\">Delete</a></td>";
    }
}
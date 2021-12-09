<fieldset>
    <legend><h2>Supprimer</h2></legend>
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
    }
}
//var_dump($_SESSION);
echo "<h2>Supprimer mon compte</h2>";
if (isset($_SESSION['connecte'])) {
    if ($_SESSION['connecte'] == true) {
        echo "<p>Appuier sur &quotOK&quot pour supprimer votre compte : ";

        echo "<a class='button' href=\"index.php?id=" . $_SESSION["id"][0] . "\">OK</a></p>";
    }
}
?>
</fieldset>
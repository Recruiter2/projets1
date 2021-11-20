<?php
include "../db.php";
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET["id"])) {
    $id = $_GET['id']; // $id is now defined
};
// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($c,"DELETE FROM users WHERE id='".$id."'");
mysqli_close($c);
session_destroy();
header("Location: ..");
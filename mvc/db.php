<?php




$c = mysqli_connect("127.0.0.1", "root", "", "projets1");
mysqli_set_charset($c, "utf8");

if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}
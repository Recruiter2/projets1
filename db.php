<?php




$c = mysqli_connect("localhost", "l2", "L2", "projets1");
mysqli_set_charset($c, "utf8");

if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}

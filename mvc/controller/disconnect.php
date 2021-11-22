<?php
session_start();
$_SESSION["connecte"] = $_GET["connecte"];
var_dump($_SESSION["connecte"]);
session_unset();
var_dump($_SESSION["connecte"]);
header("Location: ..");

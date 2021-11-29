<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> ArcheLab</title>
</head>

<body>

<h1><a class="button1" href ="index.php?page=home"> Arche </a></h1>

<ul>
    <li ><a class="button" href ="index.php?page=creer">Créer post</a></li>

    <?php

    if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
        //var_dump($_SESSION["connecte"]);
        echo '<li ><a class="button" href ="index.php?page=modifier">modifier</a></li>';
        echo '<li ><a class="button" href ="index.php?connecte=false">Deconnexion</a></li>';
        echo '<li ><a class="button" href ="index.php?page=supprimer">supprimer</a></li>';
        //header("location:index.php?page=home");

    }
    else  {
        if (isset($_SESSION["connecte"])) var_dump($_SESSION["connecte"]);
        echo'
           
    
    
    <li ><a class="button" href =" index.php?page=connexion">Connexion</a></li> ';
    }
    ?>

</ul>


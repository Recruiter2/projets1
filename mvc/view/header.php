<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>ArcheLab</title>
</head>

<body>
<h1> Arche </h1>

<div id="div_top_hypers">
<ul id="ul_top_hypers">
    <li class="button"><a href ="index.php?page=creer" class="button">Créer post</a></li>

    <?php

    if (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
        //var_dump($_SESSION["connecte"]);
        echo '<li class="button"><a href ="index.php?page=modifier" class="button">modifier</a></li>';
        echo '<li class="button"><a href ="index.php?connecte=false" class="button">Deconnexion</a></li>';
        echo '<li class="button"><a href ="index.php?page=supprimer" class="button">supprimer</a></li>';

    }
    else  {
        if (isset($_SESSION["connecte"])) var_dump($_SESSION["connecte"]);
        echo'
           
    
    
    <li class="button"><a href =" index.php?page=connexion" class="button">Connexion</a></li> ';
    }
    ?>

</ul>

</div>
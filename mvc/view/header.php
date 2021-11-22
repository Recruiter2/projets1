<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ArcheLab</title>
</head>

<body>
<h1> Arche </h1>

<ul>
    <li><a href =" index.php?page=creer">Créer post</a></li>
    <?php

    if (isset($_SESSION["connecte"])) {
        if ($_SESSION["connecte"] == true){
        //var_dump($_SESSION["connecte"]);
        //var_dump($_GET["connecte"]);

        //var_dump($isConnected . "heder?php");
        echo '<li><a href ="index.php?connecte=false">Deconnexion</a></li>';

    }}
    else  {
       // var_dump($_SESSION["connecte"]);
        //var_dump($_GET["connecte"]);
        echo'
           
    <li><a href =" index.php?page=supprimer">Supprimer</a></li>
    
    <li><a href =" index.php?page=connexion">Connexion</a></li> ';
    }
    ?>

</ul>


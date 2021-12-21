<?php

/* quand on envoie ce commentaire :
Coruscant est une planète couverte d'une œcuménopole de l'univers de fiction Star Wars. Située parmi les mondes du Noyau, cette planète orbite autour de Coruscant Prime. Il s'agit de la capitale de la République galactique, puis de l'Empire galactique qui lui succède. Quoiqu'elle soit peu accueillante sous sa forme naturelle, il s'agit probablement du monde d'origine des humains et des taungs, ancêtres des mandaloriens. La planète est modifiée artificiellement, ce qui en fait un lieu plus agréable à vivre. Les deux peuples apparemment originaires de Coruscant prennent ensuite le contrôle de la Galaxie. Du fait de son emplacement à la croisée de routes hyperspatiales, Coruscant s'impose comme monde dominant du Noyau, zone galactique la plus développée. Toutefois, sa situation en fait un lieu propice aux guerres et aux affaires d'État. Elle apparaît principalement dans les films de la deuxième trilogie de Star Wars (La Menace fantôme, L'Attaque des clones et La Revanche des Sith) et dans les films dérivés The Clone Wars et Rogue One, mais aussi à la fin du Retour du Jedi. En plus des films, Coruscant est représentée dans les séries télévisées The Clone Wars, Forces du destin et Rebels, dans les mises en roman des films dans lesquels elle apparaît, ainsi que dans plusieurs romans, jeux vidéo et bandes dessinées.
(fin du commentaire) il y avait un problème donc la solution faire une bricole la voici :
En plus les prepared statements permettent de prévenir les attaque de la base de donnés...
voir sql injection
*/
$con = new PDO('mysql:host=localhost;dbname=projets1;charset=utf8', 'l2', 'L2', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

function commenter($id_user,$id_media,$titre,$text, $con){
    $con;
    $sql = $con->prepare('INSERT INTO `commentaires` (`titre`, `text`, `reactions`, `id_media`, `id_user`) 
VALUES(?, ?, ?, ?, ?)');
    $sql->execute(array($titre, $text, '2', $id_media, $id_user));
}


if (isset($_POST["action"])) {
    if ($_POST["action"] == "envoi_com"){
        if(isset($_POST["titre"])&&isset($_POST["text"])){
            $titre = htmlspecialchars($_POST["titre"]);
            $text = htmlspecialchars($_POST["text"]);
            $user = htmlspecialchars($_POST["user"]);
            $media = htmlspecialchars($_POST["media"]);
            commenter($user,$media,$titre,$text, $con);
            header("location:./?page=commentaires&media=".$media);
        }
    }
}

$conn=null;
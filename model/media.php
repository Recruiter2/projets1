<?php
//page mode pour la gestion des médias 
function verifie_topic($titre){
	global $c;
	$sql = "select titre FROM `media`";
	$resultat = mysqli_query($c,$sql);
    $meme_titre = false;
    while ($row = mysqli_fetch_assoc($resultat)){
        if ($titre == $row['titre']){
			$meme_titre = True;
		}
	}
    return $meme_titre;
}

function cree_media($titre, $categorie, $information, $createur){
	global $c;
	$titre = mysqli_real_escape_string($c, $titre);
	$categorie = mysqli_real_escape_string($c, $categorie);
	$information = mysqli_real_escape_string($c, $information);
	$createur = mysqli_real_escape_string($c, $createur);
	$sql = "INSERT INTO `media` (`titre`, `categorie`, `information`, `photo`, `createur`) VALUES ('$titre', '$categorie','$information', '', '$createur');";
	mysqli_query($c, $sql);
}

//fonction d'affichage de resultat
function search($recherche){
	global $c;
	$tab = ["culture","Art","Sport","Cuisine","Education","Science","Autre"];
	$sql = "SELECT * FROM media
		WHERE titre LIKE '%$recherche%' ";
		$result = mysqli_query($c, $sql);
	echo "<div class='aff-topic'>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='topic-main'>";
        echo "<h3 id = 'info_text' class='topic-title'>" . $row["titre"] . "</h3>";
        #echo "<p class='topic-img'>". $row["photo"]."</p><hr>" ;
        echo  "<div id = 'info_text' class=\"topic-information\">" . $row["information"] . "</div>";
        echo   "<p class=\"topic-author\"><strong>auteur : </strong>".$row["createur"]."</p>" ;
        echo  "<p class=\"topic-date\"><strong>Date de publication : </strong>" . $row["date"] . "</p>";
		echo "<a href=./?page=commentaires&media=".$row["id"].">commentaires</a>";
        echo "</div>";
    }
    echo "</div>";
  }

  //afficher les medias
  function afficher_topic($categorie) {
    global $c;
      // 2/3 -> REQUETE
	$tab = ["","culture","Art","Sport","Cuisine","Education","Science","Autre"];
	if($categorie>0 and $categorie<=7)
		$sql = "SELECT * FROM `media` WHERE `categorie` = ".$categorie;
	else
		$sql = "SELECT * FROM `media`";
    $result = mysqli_query($c, $sql);


    // 3/3 -> AFFICHAGE
    // Récupère chaque ligne de la BD dans un tableau "$row"

    echo "<div class='aff-topic'><h2>".$tab[$categorie]."</h2>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='topic-main'>";
        echo "<h3 id = 'info_text' class='topic-title'>" . $row["titre"] . "</h3>";
        #echo "<p class='topic-img'>". $row["photo"]."</p><hr>" ;
        echo  "<div id = 'info_text' class=\"topic-information\">" . $row["information"] . "</div>";
        echo   "<p id = 'info_text' class=\"topic-author\"><strong>auteur : </strong>".$row["createur"]."</p>" ;
        echo  "<p class=\"topic-date\"><strong>Date de publication : </strong>" . $row["date"] . "</p>";
		echo "<a href=./?page=commentaires&media=".$row["id"].">commentaires</a>";
        echo "</div>";

        //echo "<td><a class='button' href=\"index.php?action=delete&id=" . $row['id'] . "\">Delete</a></td>";
    }
    echo "</div>";
}
// fonction afficher titre du topic
function Titre_media($media){
	global $c;
	$sql = "SELECT titre FROM media WHERE id='$media'";
	$resultat = mysqli_query($c, $sql);
	$row = mysqli_fetch_assoc($resultat);
	echo "<span id = 'info_text_com'  class=\"com-media\">".$row["titre"]."</span>";
}

//fonction afficher les commentaires:

function Afficher_com($media){
	global $c;
	$sql = "SELECT * FROM commentaires WHERE id_media='$media'";
	$resultat = mysqli_query($c, $sql);
	while($row = mysqli_fetch_assoc($resultat)){
		echo '<div class="commentaires">';
		$sql = "SELECT pseudo FROM users WHERE id=".$row["id_user"];
		$result = mysqli_query($c, $sql);
		echo "<strong id = 'info_text_com' class=\"com-pseudo\">@".mysqli_fetch_assoc($result)["pseudo"]."</strong>"."<br>";
		echo "<strong id = 'info_text_com' class=\"com-titre\">".$row["titre"]."</strong>"."<br>";
		echo "<span id = 'info_text_com' class=\"com-text\">".$row["text"]."</span></div>";
	}
}

/* ancien voir ajout_comm.php
function commenter($id_user,$id_media,$titre,$text){
	global $c;
	$sql = "INSERT INTO `commentaires` (`titre`, `text`, `reactions`, `id_media`, `id_user`) VALUES ('$titre', '$text', '2', '$id_media', '$id_user');";
	echo $sql;
    mysqli_query($c, $sql);
}
*/

/*function delete_topic()
{
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if ((isset($_GET["name"]) and recup_role($_GET["pseu"] == "admin" )){
    $name = $_GET['name'];
    $sql = "DELETE FROM name WHERE id='" . $name . "'";
    mysqli_query($c, $sql);
    echo "Le topic a été supprimé.";
}
}*/
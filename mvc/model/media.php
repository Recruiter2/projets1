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
	$resultat = mysqli_query($c,$sql);
	echo "<table class=\"table-resultat\">";
	echo "<thead>";
	echo "<tr>";
	echo "<th>media<th/>";
	echo "<th>categorie<th/>";
	echo "<th>information<th/>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while( $row = mysqli_fetch_assoc($resultat)){
		echo "<tr>";
		echo "<td>".$row['titre']."<td/>";
		echo "<td>".$tab[$row['categorie']-1]."<td/>";
		echo "<td>".$row['information']."<td/>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "<table>";
  }

  //afficher les medias
  function afficher_topic($categorie) {
    global $c;
      // 2/3 -> REQUETE
	$tab = ["culture","Art","Sport","Cuisine","Education","Science","Autre"];
	if($categorie>0 and $categorie<=7)
		$sql = "SELECT * FROM `media` WHERE `categorie` = ".$categorie;
	else
		$sql = "SELECT * FROM `media`";
    $result = mysqli_query($c, $sql);


    // 3/3 -> AFFICHAGE
    // Récupère chaque ligne de la BD dans un tableau "$row"

    echo "<div class='aff-topic'><h2>".$categorie."</h2>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='topic'>";
        $var3 = htmlspecialchars($row["titre"], ENT_QUOTES, 'UTF-8');
        echo "<h3 class='ttopic'>" . $var3 . "</h3>";

        $var4 =    htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8');
        echo "<p class='information'>". $var4 ;
        $var5 = htmlspecialchars($row["information"], ENT_QUOTES, 'UTF-8');
        echo  "<pre>" . $var5 . "</pre>";
        $var6 = htmlspecialchars($row["createur"], ENT_QUOTES, 'UTF-8');
        echo  $var6 ;
        $var7 = htmlspecialchars($row["date"], ENT_QUOTES, 'UTF-8');
        echo  " " . $var7 . "</p>";
		echo "<a href=./?page=commentaires&media=".$row["id"].">commentaires</a>";
        echo "</div>";

        //echo "<td><a class='button' href=\"index.php?action=delete&id=" . $row['id'] . "\">Delete</a></td>";
    }
    echo "</div>";
}

//afficher les commentaires:

function Afficher_com($media){
	global $c;
	$sql = "SELECT * FROM commentaires WHERE id_media='$media'";
	$resultat = mysqli_query($c, $sql);
	while( $row = mysqli_fetch_assoc($resultat)){
		$sql = "SELECT pseudo FROM users WHERE id=".$row["id_user"];
		$result = mysqli_query($c, $sql);
		echo "<strong>".mysqli_fetch_assoc($result)["pseudo"]."</strong>"."<br>";
		echo $row["text"]."<br>";
	}
}

function commenter($id_user,$id_media,$titre,$text){
	global $c;
	$sql = "INSERT INTO `commentaires` (`id`, `titre`, `text`, `reactions`, `id_media`, `id_user`) VALUES (NULL, '$titre', '$text', '2', '$id_media', '$id_user')";
	mysqli_query($c, $sql);
}
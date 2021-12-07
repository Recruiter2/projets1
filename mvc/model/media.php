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
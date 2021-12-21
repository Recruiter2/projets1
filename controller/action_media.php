<?php 

include 'ajout_comm.php';
//formulaire de vérification 
if (isset($_POST["action"]) && $_POST["action"] == "proposer_media") {
   if (isset($_POST['titre']) && isset($_POST['categorie'])) {
      if ($_POST['titre'] != "" && $_POST['categorie'] != "" ) {
         if (!verifie_topic($_POST['titre'])) {
            $_SESSION['titre'] = $_POST['titre'];
            $_SESSION['categorie'] = $_POST['categorie'];
            header("Location: ./?page=ajout_post"); 
         } else {
            echo " tritre existant";
         }
      } else {
         echo "manque info";
      }
   } else {
      echo "manque info";
   }
}
//formulaire d'ajout media
if (isset($_POST["action"]) && $_POST["action"] == "creer_media") {
   if (isset($_POST['information']) && $_POST['information'] != "") {
      $user = "anonymous";
      if (isset( $_SESSION['username'])) {
         $user = $_SESSION['username'];
      }
      cree_media($_SESSION['titre'], $_SESSION['categorie'], $_POST['information'], $user);
      unset($_SESSION['titre']);
      unset($_SESSION['categorie']);
       header("Location: controller/PRG.php");
   }else {
         echo "info incorrect"; 
      }
   }

// formulaire de recherche
   if (isset($_POST["action"])) {
      if( $_POST["action"] == "rech"){
         $recherche = isset($_POST['valrecherche']) ? $_POST['valrecherche'] : '';
         header("location:./?page=rechercher&q=".$recherche);
      }
}

//formulaire home->cathegorie
if (isset($_POST["action"])) {
   if ($_POST["action"] == "categorie"){
      $categorie = $_POST["selcath"];
      header("location:./?page=home&catego=".$categorie);
   }
}

//formulaire commenter
/* ancien formulaire commenter (voir ajout_comm.php)
if (isset($_POST["action"])) {
   if ($_POST["action"] == "envoi_com"){
      if(isset($_POST["titre"])&&isset($_POST["text"])){
         $titre = $_POST["titre"];
         $text = $_POST["text"];
         $user = $_POST["user"];
         $media = $_POST["media"];
         commenter($user,$media,$titre,$text);
         header("location:./?page=commentaires&media=".$media);
      }
   }
}
*/
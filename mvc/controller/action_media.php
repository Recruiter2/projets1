<?php 

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
//formulaire d'ajout
if (isset($_POST["action"]) && $_POST["action"] == "creer_media") {
   if (isset($_POST['information']) && $_POST['information'] != "") {
      $user = "anonymous";
      if (isset( $_SESSION['username'])) {
         $user = $_SESSION['username'];
      }
      cree_media($_SESSION['titre'], $_SESSION['categorie'], $_POST['information'], $user);
      unset($_SESSION['titre']);
      unset($_SESSION['categorie']);
   }else {
         echo "info incorrect"; 
      }
   }
<body>
<div id="container">
<?php
if(isset($_GET["q"])){
  if($_GET["q"] != ""){
    $q = $_GET["q"]; 
    echo "<h1>resultat de la recherche : ".$q."</h1>";
    search($q);
  }else{
    echo "<h1>entrer un mot clé </h1>";
  }
}else{echo "<h1>entrer un mot clé </h1>";};

?>
</div>
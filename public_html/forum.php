<?php
require 'includes/topnav.php';
if(isset($_POST["action-poste"]) && $_POST["titre"] != null){
  $poste["titre"] = $_POST["titre"];
  $poste["description"]  = $_POST["description"];
  $poste["date"]  =date("Y/m/d");
  $poste["utilisateur"]  = $_SESSION["pseudo"];
  $poste = ForumDAO::ajouter($poste);
  header("Location:forum.php");
die();
}
$listePoste = null;
$listePoste = ForumDAO::listePoste();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="generale.css">
  <title>GameDepth</title>
</head>

<body>
  <div class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
    </div>
  <br><br><br><br><br><br><br><br>
  <?php 
    if(!isset($_SESSION["autentifier"]) || !$_SESSION["autentifier"]){
      echo'
  <h1>Forum</h1>
  <br> <br> <br>
  <p>Posibilité de se connecter et de discuter avec des gens passionner</p>
  <a href="membre.php" class="button">Connectez-Vous</a>';}
  else{
    echo'
    <p>Creer un poste</p>
    <a href="forumCR.php" class="button">Creer</a></br>
    ';
    foreach ($listePoste as $key => $poste) {
      echo'<div class="posteDiv">';
      echo'<div class="poste">';
      echo '<h1>Titre:'.$poste["titre"].'</h1>';
      echo '<h2></br>'.$poste["description"].'</h2>';
      echo '</br></br></br><p>'.$poste["date"].'</p>';
      echo '</br><p>'.$poste["utilisateur"].'</p>';
      echo'</div>';
      echo'</div>';

    }
  }
  ?>
  <div class="stickyl">
    <div class="FootBar">
      <div class="floatright">
        <a class="RSButton" href="https://www.facebook.com/"><p id="Facebook">Facebook</p></a>
        <a class="RSButton" href="https://twitter.com/"><p id="Twitter">Twitter</p></a>
        <a class="RSButton" href="https://github.com/"><p id="GitHub">GitHub</p></a>
        <a class="RSButton" href="https://www.youtube.com/"><p id="Youtube">Youtube</p></a>
        <a class="RSButton" href="https://www.reddit.com/"><p id="Reddit">Reddit</p></a>
      </div>
    </div>
  </div>
  <script src="Scripts/Nav.js"></script>
  <script src="Scripts/Footer.js"></script>
</body>

</html>
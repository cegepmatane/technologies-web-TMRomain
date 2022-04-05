<?php
require 'includes/topnav.php';
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
  <a href="membre.php" class="button">Connectez-Vous</a>';}else{
    echo'
    <div class="FormContact">
    <form id="answers" method="POST" action="forum.php">
      <fieldset>
        <legend>Votre poste :</legend>
        <p><label for="titre">Titre du poste: </label></p>
            <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="text" name="titre" id="titre"></p>
        <p><label for="description">Description du poste: </label></p>
            <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="text" name="description" id="description" size="50"></p>
        <br>
        <p><input type="submit" name="action-autentification" value="Envoyer"></p>
      </fieldset>
    </form>
    ';
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
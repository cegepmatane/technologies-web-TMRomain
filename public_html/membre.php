<?php
require_once "Serveur/MembreDAO.php";
$membreAutentifier = false;
$membreInscription = false;
if(isset($_POST["action-autentification"])){
    $membre["pseudo"] = $_POST["pseudo"];
    $membre["mdp"]  = $_POST["mdp"];
    $membre = membreDAO::autentifier($membre);
    if (isset($membre["id"])){
        $membreAutentifier = true;
    }
    else {
        $membreAutentifier = false;
        echo "Mauvais mot de passe";
    }

if($membreAutentifier){
  if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
  $_SESSION["autentifier"]=true;
  $_SESSION["pseudo"]=$membre["pseudo"];
  $_SESSION["id"]=$membre["id"];
}
}
if(isset($_POST["action-deconexion"])){
  if (!session_status() === PHP_SESSION_NONE) {
  unset($_SESSION['autentifier']);
  $_SESSION["autentifier"]=false;
  $_SESSION["pseudonyme"]= null;
  $_SESSION["id"]= null;
}
}
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
  <div class="FormContact">
    <form id="answers" method="POST" action="membre.php">
      <fieldset>
        <legend>Se Connecter :</legend>
        <p><label for="pseudo">Votre Pseudo :</label></p>
            <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="text" name="pseudo" id="pseudo"></p>
        <p><img src="Decoration/lock.png" alt="Membre" style="width:13px;height:13px;">
          <label for="mdp">Votre mots de passe :</label>
          <input type="password" id="mdp" name="mdp" minlength="8" required></p>
        <br>
        <p><input type="submit" name="action-autentification" value="Envoyer"></p>
      </fieldset>
    </form>
  </div>';}else{
    echo'<p>Vous ete connecter</p>';
    echo $_SESSION["pseudo"];
    echo' <form id="answers" method="POST" action="membre.php">
    <div class="aligncenter">
      <p><input class="buttonConnexion" type="submit" name="action-deconexion" value="Deconnecter"></p>
    </div>';
  }   
  ?>
  <div id="message"></div>
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
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
    <div id="box">
      <p id="changingText">Texte qui change</p>
  </div>

  <div class="FormContact">
    <form id="answers" onsubmit="envoieContact();">
      <fieldset>
        <legend>Nous contacter</legend>
        <p><label for="sujet">Titre de votre sujet :</label></p>
        <p><input type="text" name="sujet" id="sujet" autofocus></p>
        <!-- <p><label for="emailCompte">Votre email : </label></p>
        <p><input class="popUp" type="text" onfocus="onFocusEmail()" onfocusout="outFocusEmail(this)" name="emailCompte"
            id="emailCompte" title="Ici vous devais entrer votre prenom" placeholder="exemple@exemple.exemple"></p> -->
        <p><label>Votre type de problémes : </label></p>
        <select>
          <option value="site">Site Web</option>
          <option value="article">Aticles</option>
          <option value="compte">Compte</option>
          <option value="aucun">Aucun</option>
        </select>
        <p><label for="sujettxt">Votre Sujet :</label></p>
        <p><textarea class="popUp" id="sujettxt" title="Specifier votre problémes"  rows="4" cols="50"></textarea></p>
        <input type="submit" value="Envoyer">
      </fieldset>
    </form>
    <div id="message"></div>
  </div>

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
  <script src="Scripts/form.js"></script>
  <script src="Scripts/Contact.js"></script>
</body>

</html>
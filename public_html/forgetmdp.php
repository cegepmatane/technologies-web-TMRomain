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
  <div class="FormContact">
    <form id="answers" onsubmit="return validerCompte();">
      <fieldset>

        <p><label for="emailCompte">Votre email : </label>
          <input type="text" onfocus="onFocusEmail()" onfocusout="outFocusEmail(this)" name="emailCompte"
            id="emailCompte" placeholder="exemple@exemple.exemple"></p>
        <input type="submit" value="Envoyer">
      </fieldset>
    </form>
  </div>
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
  <script src="Scripts/Countdown.js"></script>
</body>

</html>
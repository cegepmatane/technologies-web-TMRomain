﻿<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="generale.css">
  <title>GameDepth</title>
</head>

<body>
<nav class="sticky">
    <div class="TopBar">
      <img class="logo" src="Decoration/LogoTemporaire1.png" alt="LogoTemporaire">
      <!-- Cache l'ecran quand actif  -->
      <div id="menuModal" class="modalMenu">
      <!-- Hamburger Menu -->
        <div class="container" id="hambMenu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="index.html">Accueil</a></li>
        <li class="hambNav" id="accordion" >Articles</li>
        </ul>
        <ul class="panel">
            <li class="hambNav"><a class="topLink" href="studio.html">Studio</a></li>
            <li class="hambNav" ><a class="topLink" href="jeux.html">Jeux Vidéo</a></li>
            <li class="hambNav"> <a class="topLink" href="histoire.html">Histoire</a></li>
        </ul>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="blog.html">Blog</a></li>
        <li class="hambNav"><a class="topLink" href="forum.html">Forum</a></li>
        <li class="hambNav"><a class="topLink" href="contact.html">Contact</a></li>
        <li class="hambNav"><a class="topLink" href="a_propos.html">À propos</a></li>
      </ul>
    </div>
      <ul>
        <li class="topNav"><a class="topLink" href="index.html"> Accueil</a></li>
        <li class="topNav"><a href="article.html" class="topLink">Articles</a>
          <ul class="dropdown">
            <li class="topNav"><a class="topLink" href="studio.html">Studio</a></li>
            <li class="topNav" ><a class="topLink" href="jeux.html">Jeux Vidéo</a></li>
            <li class="topNav"> <a class="topLink" href="histoire.html">Histoire</a></li>
          </ul>
        </li>
        <li class="topNav"><a class="topLink" href="blog.html">Blog</a></li>
        <li class="topNav"><a class="topLink" href="forum.html">Forum</a></li>
        <li class="topNav"><a class="topLink" href="contact.html">Contact</a></li>
        <li class="topNav"><a class="topLink" href="a_propos.html">À propos</a></li>
        <li class="topNavRight"><a class="topLink">Connection</a>
          <ul class="startRight">
            <li>
              <fieldset class="Connection">
                <form>
                  <p><label for="email">Votre email : </label></p>
                  <input type="text" name="email" id="email" placeholder="exemple@exemple.exemple">
                  <p><label for="pass">Mot de passe: </label></p>
                  <input type="password" id="pass" name="pass" minlength="8" required>
                  <div class="aligncenter">
                    <input type="submit" value="Envoyer">
                  </div>
                </form>
                <p><a href="ccompte.html">Crée un compte</a></p>
                <p><a href="forgetmdp.html">Mot de passe oublié</a></p>
              </fieldset>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
      <section class="wrapper">
          <div id="stars"></div>
          <div id="stars2"></div>
          <div id="stars3"></div>
  <br><br><br><br><br><br><br><br>
  <div class="FormContact">
    <form id="answers" method="get" onsubmit="return validerCompte();" action="connexion.html">
      <fieldset>
        <legend>Crée un Compte :</legend>
        <div id="erreur"></div>
        <p><label for="prenom">Votre Prénom :</label></p>
        <p><input type="text" onclick="turnBlue(this)" onfocusout="unFocus(this)" name="prenom" id="prenom"
            placeholder="Alexis" autofocus ></p>
        <p><label for="date">Date de naissance :</label></p>
          <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="date" id="date" name="date"></p>
        <p><img src="Decoration/LogoConnexion.png" alt="Membre" style="width:13px;height:13px;"></p>
          <p><label for="pseudo">Votre Pseudo :</label></p>
            <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="text" name="pseudo" id="pseudo"></p>
        <p><img src="Decoration/emailIcon.png" alt="Membre" style="width:13px;height:13px;"></p>
          <p> <label id="emailComptetxt" for="emailCompte">Votre email : </label></p>
          <p><input onfocus="onFocusEmail()" onclick="    turnBlue(this)" onfocusout="unFocus(this),outFocusEmail(this)"
            type="text" name="emailCompte" id="emailCompte"></p>
        <p><img src="Decoration/lock.png" alt="Membre" style="width:13px;height:13px;"></p>
          <p><label for="passwordcc">Votre mots de passe :</label></p>
            <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="password" id="passwordcc" name="passwordcc"
            minlength="8" required></p>
        <br>
        <p><input type="submit" value="Envoyer"></p>
      </fieldset>
      <div id="message"></div>
    </form>
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
  <script src="Scripts/CreateAccount.js"></script>
      </section>
</body>

</html>
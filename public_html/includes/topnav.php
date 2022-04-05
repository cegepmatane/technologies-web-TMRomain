<?php
require_once "Serveur/MembreDAO.php";
require_once "Serveur/ForumDAO.php";
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
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
  if (session_status() != PHP_SESSION_NONE) {
    unset($_SESSION['autentifier']);
    $_SESSION["autentifier"]=false;
    $_SESSION["pseudo"]= null;
    $_SESSION["id"]= null;
  }
}
echo '
<nav class="sticky">
    <div class="TopBar">
      <img class="logo" src="Decoration/LogoTemporaire1.png" alt="LogoTemporaire">
      <div id="menuModal" class="modalMenu">
      <!-- Hamburger Menu -->
        <div class="container" id="hambMenu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="index.php">Accueil</a></li>
        <li class="hambNav" id="accordion" >Articles</li>
        </ul>
        <ul id="panel">
            <li class="hambNav"><a class="topLink" href="studio.php">Studio</a></li>
            <li class="hambNav" ><a class="topLink" href="jeux.php">Jeux Vidéo</a></li>
            <li class="hambNav"> <a class="topLink" href="histoire.php">Histoire</a></li>
        </ul>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="blog.php">Blog</a></li>
        <li class="hambNav"><a class="topLink" href="forum.php">Forum</a></li>
        <li class="hambNav"><a class="topLink" href="contact.php">Contact</a></li>
        <li class="hambNav"><a class="topLink" href="a_propos.php">À propos</a></li>
      </ul>
    </div>
      <ul>
        <li class="topNav"><a class="topLink" href="index.php"> Accueil</a></li>
        <li class="topNav"><a href="article.php" class="topLink">Articles</a>
          <ul class="dropdown">
            <li class="topNav"><a class="topLink" href="studio.php">Studio</a></li>
            <li class="topNav" ><a class="topLink" href="jeux.php">Jeux Vidéo</a></li>
            <li class="topNav"> <a class="topLink" href="histoire.php">Histoire</a></li>
          </ul>
        </li>
        <li class="topNav"><a class="topLink" href="blog.php">Blog</a></li>
        <li class="topNav"><a class="topLink" href="forum.php">Forum</a></li>
        <li class="topNav"><a class="topLink" href="contact.php">Contact</a></li>
        <li class="topNav"><a class="topLink" href="a_propos.php">À propos</a></li>
        ';
        if(!isset($_SESSION["autentifier"]) || !$_SESSION["autentifier"]){
          echo'
        <li class="topNavRight"><a href="membre.php" class="topLink">Connection</a>
          <ul class="startRight">
              <fieldset>
              <form id="answers" method="POST" action="membre.php">
              <p><label for="pseudo">Votre Pseudo :</label></p>
              <p><input onclick="turnBlue(this)" onfocusout="unFocus(this)" type="text" name="pseudo" id="pseudo"></p>
                  <p><label for="mdp">Mot de passe: </label></p>
                  <input type="password" id="pass" name="mdp" minlength="8" required>
                  <div class="aligncenter">
                    <p><input type="submit" name="action-autentification" value="Envoyer"></p>
                  </div>
                </form>
                <p><a href="ccompte.php">Crée un compte</a></p>
                <p><a href="forgetmdp.php">Mot de passe oublié</a></p>
              </fieldset>
              </ul></li>';}else{
              echo'<li class="topNavRight"><a class="topLink">';echo $_SESSION["pseudo"]; echo'</a>
              <ul class="startRight">
                <li>
                <form id="answers" method="POST" action="membre.php">
                <div class="aligncenter">
                  <p><input class="buttonConnexion" type="submit" name="action-deconexion" value="Deconnecter"></p>
                </div>
              </form>
                  </fieldset>
                </li></ul></li>';
            };
            echo'
      </ul>
    </div>
  </nav>
  ';
  ?>
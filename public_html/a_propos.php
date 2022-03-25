<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="generale.css">
  <title>GameDepth</title>
  <style>
    body{
      font-family: "Trebuchet MS", sans-serif;
    }
    .demoHeaders {
      margin-top: 2em;
    }
    #dialog-link {
      padding: .4em 1em .4em 20px;
      text-decoration: none;
      position: relative;
    }
    #dialog-link span.ui-icon {
      margin: 0 5px 0 0;
      position: absolute;
      left: .2em;
      top: 50%;
      margin-top: -8px;
    }
    #icons {
      margin: 0;
      padding: 0;
    }
    #icons li {
      margin: 2px;
      position: relative;
      padding: 4px 0;
      cursor: pointer;
      float: left;
      list-style: none;
    }
    #icons span.ui-icon {
      float: left;
      margin: 0 4px;
    }
    .fakewindowcontain .ui-widget-overlay {
      position: absolute;
    }
    select {
      width: 200px;
    }
    </style>
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
            <li class="hambNav" id="accordion2" >Articles</li>
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
  <div class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
    </div>
  <br><br><br><br><br><br><br><br>
  <h1>À propos</h1>
  <br> <br> <br>
  <h2 class="demoHeaders">Accordion</h2>
<div id="accordion">
	<h3>First</h3>
	<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
	<h3>Second</h3>
	<div>Phasellus mattis tincidunt nibh.</div>
	<h3>Third</h3>
	<div>Nam dui erat, auctor a, dignissim quis.</div>
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
  <script src="Scripts/jquery.js"></script>
  <script src="Scripts/jquery-ui.js"></script>
  <script>
  
  $( "#accordion" ).accordion();
  // Hover states on the static widgets
  $( "#dialog-link, #icons li" ).hover(
    function() {
      $( this ).addClass( "ui-state-hover" );
    },
    function() {
      $( this ).removeClass( "ui-state-hover" );
    }
  );
  </script>
</body>

</html>
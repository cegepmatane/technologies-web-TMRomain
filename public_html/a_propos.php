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
// Date jusqu'a ou compter
var countDownDate = new Date("Jun 9, 2022 15:37:25").getTime();

// Mettre a jour le temps 
var x = setInterval(function() {

  // Date d'aujourd'hui
  var now = new Date().getTime();

  // distance entre les date
  var distance = countDownDate - now;

  // Calcule des jours /heure /seconds /minutes
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  //Afficher dans l'element countdown
  document.getElementById("countdown").innerHTML = days + "j " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // Si le compte a rebours et teminer faire
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Deja passer";
  }
}, 1000);
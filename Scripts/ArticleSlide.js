var slideIndex = 1;
showSlides(slideIndex);

// suivant /precedent 
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Controlle numero image
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}



// Recuperer le bloqueur
var modal = document.getElementById("myModal");

// trouvet l'image
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
function bigger(image){
  modal.style.display = "block";
  modalImg.src = image.src;
}

// Trouver l'element pour la fermeture
var span = document.getElementsByClassName("close")[0];

// Fermeture
span.onclick = function() {
  modal.style.display = "none";
}
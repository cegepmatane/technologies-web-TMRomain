var prevScrollpos = window.pageYOffset;
var menu = document.getElementById("hambMenu");
var modal = document.getElementById("menuModal");
var link = document.getElementsByClassName("menu");
var x = window.matchMedia("(max-width: 600px)")
var acc = document.getElementById("accordion");
var i;
let isOpen = false ;
let isMatch = false;
var panel = document.getElementById("panel");
panel.style.display = "none";
verifyScreen(x); // Call listener function at run time
x.addListener(verifyScreen); // Attach listener function on state changes

function verifyScreen(x){
  if (x.matches) {
    isMatch = true;
    menu.style.visibility = "visible";
  } else {
    isMatch = false;
  }
  
  if(isOpen == false && isMatch == false) {
    menu.style.visibility = "hidden";
  }
}

menu.addEventListener("click",function showModal(){
  if(isOpen == false){
    modal.style.visibility = "visible";
    link[0].style.visibility = "visible";
    modal.style.backgroundColor = "rgba(73, 91, 170, 1)";
    isOpen = true;
  }else if(isOpen == true){
    link[0].style.visibility = "hidden";
    if (isMatch == false) {
      menu.style.visibility = "hidden";
    }
    modal.style.visibility = "hidden";
    modal.style.backgroundColor = "rgba(73, 91, 170, 0)";
    isOpen = false;
  }
  menu.classList.toggle("change");  
});
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (document.documentElement.scrollTop == 0) {
    document.getElementsByClassName("logo")[0].style.width  = 13 + "%";
    document.getElementsByClassName("TopBar")[0].style.transition  =  2 + "s";
    document.getElementsByClassName("TopBar")[0].style.top  =  0 + "px";


  } else {
    document.getElementsByClassName("logo")[0].style.width  = 0+"px"; 
    document.getElementsByClassName("TopBar")[0].style.transition  =  2 + "s";
    document.getElementsByClassName("TopBar")[0].style.top  =  -25 + "px";
  }
  prevScrollpos = currentScrollPos;
}
document.body.onload = function() {startLoad()};

function startLoad() {
  document.getElementsByClassName("TopBar")[0].style.transition  =  2 + "s";
  document.getElementsByClassName("TopBar")[0].style.top  =  0 + "px";
}
  acc.addEventListener("click", function() {
    /* Change la class a actif */
    this.classList.toggle("active");

    /* Switch entre active et non active */

    if (panel.style.display == "flex") {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });

var prevScrollpos = window.pageYOffset;
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

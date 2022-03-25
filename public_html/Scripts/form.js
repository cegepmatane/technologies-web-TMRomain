let box = document.getElementById("box");
let text = document.getElementById("changingText");

box.style.visibility = "hidden";

let inputs = document.getElementsByClassName("popUp");


Array.from(inputs).forEach(function(elem) {
    elem.addEventListener("mouseover",function afficherPopUp(elem){
        text.innerHTML = elem.currentTarget.title;
        box.style.visibility = "visible";
    });
    elem.addEventListener("mouseout",function afficherPopUp(elem){
        text.innerHTML = "";
        box.style.visibility = "hidden";
    });
});


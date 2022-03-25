let footer = document.getElementById("FootBar");
var buttons = document.getElementsByClassName("RSButton");

Array.from(buttons).forEach(function (elem) {
    elem.addEventListener("mouseover", function () {
        let image = elem.firstElementChild;
        image.style.transition = 1 + "s";
        image.style.width = 30 + "px";
        image.style.height = 30 + "px";
    });
});
Array.from(buttons).forEach(function (elem) {
    elem.addEventListener("mouseleave", function() {
        let image = elem.firstElementChild;
        image.style.transition = 1 + "s";
        image.style.width = 20 + "px";
        image.style.height = 20 + "px";
    });
});


var elem = document.createElement("img");
elem.setAttribute("src", "Decoration/LogoFace.png");
elem.setAttribute("class", "imageRS");
elem.setAttribute("alt", "Facebook");
document.getElementById("Facebook").parentElement.appendChild(elem);
document.getElementById("Facebook").parentElement.removeChild(document.getElementById("Facebook"));
var elem = document.createElement("img");
elem.setAttribute("src", "Decoration/LogoTwitter.png");
elem.setAttribute("class", "imageRS");
elem.setAttribute("alt", "Twitter");
document.getElementById("Twitter").parentElement.appendChild(elem);
document.getElementById("Twitter").parentElement.removeChild(document.getElementById("Twitter"));
var elem = document.createElement("img");
elem.setAttribute("src", "Decoration/LogoGit.png");
elem.setAttribute("class", "imageRS");
elem.setAttribute("alt", "GitHub");
document.getElementById("GitHub").parentElement.appendChild(elem);
document.getElementById("GitHub").parentElement.removeChild(document.getElementById("GitHub"));
var elem = document.createElement("img");
elem.setAttribute("src", "Decoration/LogoYou.png");
elem.setAttribute("class", "imageRS");
elem.setAttribute("alt", "Youtube");
document.getElementById("Youtube").parentElement.appendChild(elem);
document.getElementById("Youtube").parentElement.removeChild(document.getElementById("Youtube"));
var elem = document.createElement("img");
elem.setAttribute("src", "Decoration/LogoRe.png");
elem.setAttribute("class", "imageRS");
elem.setAttribute("alt", "Reddit");
document.getElementById("Reddit").parentElement.appendChild(elem);
document.getElementById("Reddit").parentElement.removeChild(document.getElementById("Reddit"));
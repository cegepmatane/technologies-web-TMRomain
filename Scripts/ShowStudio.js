let listeVignettes = document.getElementsByClassName("vignetteImage");
for(let numero=0; numero < listeVignettes.length; numero++)
{
    let vignette = listeVignettes[numero];
    vignette.addEventListener("mousedown", function () {
        showVignette(this.id);
    });
}   


function showVignette(studio){
    detail = document.getElementById('detail-' + studio);
    zoneAffichage = document.getElementById('zone-affichage');
    zoneAffichage.innerHTML = detail.innerHTML;
}
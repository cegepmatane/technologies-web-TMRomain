let listeVignettes = document.getElementsByClassName("vignetteImage");
for(let numero=0; numero < listeVignettes.length; numero++)
{
    let vignette = listeVignettes[numero];
    vignette.addEventListener("mousedown", function () {
        showVignette(vignette.id);
    });
}   


function showVignette(studio){
    console.log(document.getElementById('detail-' + studio));
    detail = document.getElementById('detail-' + studio);
    let zoneAffichage = document.getElementById('zone-affichage');
    zoneAffichage.innerHTML = detail.innerHTML;
}
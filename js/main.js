const page = document.getElementById("main-container");

function affiche_jeu(page, brawler) {
    var title = document.createElement("h2");
    title.textContent = brawler.Nom;  

    var pouv = document.createElement("p");
    pouv.textContent = "Pouvoir: " + brawler.Pouvoir_star; 

    var niveau = document.createElement("p");
    niveau.textContent = "Niveau: " + brawler.Niveau; 

    var trophy = document.createElement("p");
    trophy.textContent = "Trophées : " + brawler.Trophees;  

    page.appendChild(title);
    page.appendChild(pouv);
    page.appendChild(niveau);
    page.appendChild(trophy);
}


fetch('include/fonctions.php') 
    .then(response => response.json())
    .then(brawlers => {
        brawlers.forEach(brawler => {
            affiche_jeu(page, brawler); 
        });
    })
    .catch(error => {
        console.error('erreur quand on recupere les brawlers', error);
    });
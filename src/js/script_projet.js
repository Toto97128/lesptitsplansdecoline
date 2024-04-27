document.addEventListener('DOMContentLoaded', function() {
    fetch('../json/projets.json')
    .then(response => response.json())
    .then(data => {
        // Mise à jour des éléments textuels
        document.querySelector('h3').textContent = data.titre;
        document.querySelector('.text-lg').textContent = data.description;
        document.querySelectorAll('.max-w-lg p').forEach((element, index) => {
            if (data.textes[index]) {
                element.textContent = data.textes[index];
            }
        });

        // Mise à jour de l'image principale
        document.querySelector('.relative img').src = data.imagePrincipale;

        // Mise à jour des images de la galerie
        const images = document.querySelectorAll('.p-2 img');
        images.forEach((img, index) => {
            if (data.galerie[index]) {
                img.src = data.galerie[index];
            }
        });
    })
    .catch(error => {
        console.error('Erreur lors de la récupération des données:', error);
    });
});
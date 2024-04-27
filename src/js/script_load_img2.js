document.addEventListener('DOMContentLoaded', function() {
    console.log('Lancement de la requête fetch...');
    fetch('load_img.php')
    .then(response => response.text())  // D'abord récupérer en tant que texte pour le débogage.
    .then(text => {
        console.log('Réponse reçue (texte) :', text);  // Afficher le texte pour le débogage.
        return JSON.parse(text);  // Ensuite, analyser le texte en tant que JSON.
    })
    .then(data => {
        console.log('Réponse reçue :', data);
        const projectsGrid = document.getElementById('projects-grid');

        data.forEach(project => {
            const projectElement = `
                <a href="projet.php?id=${project.id}" class="bg-black relative block flex items-center justify-center h-72 font-heading text-white uppercase tracking-widest hover:opacity-75">
                    <div class="relative z-10">${project.name}</div>
                    <img src="${project.image}" class="absolute inset-0 w-full h-full object-cover opacity-50" />
                </a>
            `;
            projectsGrid.insertAdjacentHTML('beforeend', projectElement);
        });
    })
    .catch(error => {
        console.error('Erreur lors du fetch:', error);
    });
});

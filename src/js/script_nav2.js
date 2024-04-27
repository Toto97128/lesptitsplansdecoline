document.addEventListener('DOMContentLoaded', () => {
  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var threshold = 10; // Commencer à changer de couleur après 10px de défilement vers le bas

    if (window.scrollY > threshold) {
      navbar.classList.remove('navbar_transparent');
      navbar.classList.add('navbar_rouge');
    } else {
      navbar.classList.add('navbar_transparent');
      navbar.classList.remove('navbar_rouge');
    }
  });
});
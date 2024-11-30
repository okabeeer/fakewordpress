// Affichage du header au scroll
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
        header.style.display = 'none';
    } else {
        header.style.display = '';
    }
});

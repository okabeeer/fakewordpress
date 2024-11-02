const navLinks = document.querySelector('.nav_links'); // Ensure class matches
const bars = document.querySelector('.fa-bars');
const closeIcon = document.querySelector('.fa-xmark');

bars.addEventListener('click', () => {
    navLinks.style.right = "0px"; // Show the menu
    
});

closeIcon.addEventListener('click', () => {
    navLinks.style.right = "-200px"; // Hide the menu to -200px
});





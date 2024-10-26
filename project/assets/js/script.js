const navLinks = document.querySelector('.nav_links'); // Ensure class matches
const bars = document.querySelector('.fa-bars');
const closeIcon = document.querySelector('.fa-xmark');

bars.addEventListener('click', () => {
    navLinks.style.right = "0px"; // Show the menu
    
});

closeIcon.addEventListener('click', () => {
    navLinks.style.right = "-200px"; // Hide the menu to -200px
});


let currentIndex = 0;
const items = document.querySelectorAll('.course-item');
const totalItems = items.length;

function showSlide(index) {
    const grid = document.querySelector('.courses-grid');
    const slideWidth = items[0].clientWidth; // Width of one item
    const maxIndex = totalItems - 3; // Maximum index when showing three items
    currentIndex = Math.max(0, Math.min(index, maxIndex)); // Clamp index

    grid.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

function changeSlide(direction) {
    const maxIndex = totalItems - 3; // Maximum index when showing three items
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = maxIndex; // Loop back to the last set of items
    } else if (currentIndex > maxIndex) {
        currentIndex = 0; // Loop back to the first set of items
    }

    showSlide(currentIndex); // Ensure this is called correctly
}


// Auto slide every 5 seconds
setInterval(() => {
    changeSlide(1);
}, 5000);




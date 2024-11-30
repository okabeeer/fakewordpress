let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Fonction pour sauvegarder le panier
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Fonction pour ajouter des produits au panier
function addToCart(product) {
    const existingProduct = cart.find(item => item.id === product.id);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({ ...product, quantity: 1 });
    }
    saveCart();
    alert(`${product.name} a été ajouté au panier.`); // Ajout de guillemets
}

// Attacher l'événement 'DOMContentLoaded' pour s'assurer que le DOM est prêt
document.addEventListener('DOMContentLoaded', () => {
    // Écouteur d'événement sur les boutons après leur création
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const product = {
                id: button.dataset.id,
                name: button.dataset.name,
                price: parseFloat(button.dataset.price),
                image: button.dataset.image
            };
            addToCart(product);
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var cartButton = document.getElementById('cartButton');
    var cartDropdown = document.getElementById('cartDropdown');
    var cartContent = document.getElementById('cartContent');
    var totalPrice = document.getElementById('totalPrice');
    var cartLink = document.getElementById('cartLink');
    var cartContainer = document.getElementById('cartContainer');

    var productsInCart = [];
    var total = 0;

    cartButton.addEventListener('click', function () {
        cartDropdown.style.display = (cartDropdown.style.display === 'block') ? 'none' : 'block';
    });

    cartLink.addEventListener('click', function (event) {
        event.preventDefault();
        cartDropdown.style.display = 'block';
    });

    cartContainer.addEventListener('click', function (event) {
        if (!cartButton.contains(event.target) && !cartDropdown.contains(event.target)) {
            cartDropdown.style.display = 'none';
        }
    });

    var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var price = parseFloat(button.getAttribute('data-price'));
            productsInCart.push(price);
            updateCart();
        });
    });

    function updateCart() {
        var cartItems = productsInCart.length;
        cartContent.innerHTML = (cartItems > 0) ? 'Nombre de produits : ' + cartItems : 'Aucun produit dans le panier';
        
        total = productsInCart.reduce(function (acc, price) {
            return acc + price;
        }, 0);

        totalPrice.textContent = total.toFixed(2);
    }
});

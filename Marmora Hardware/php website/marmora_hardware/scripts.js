function getCart() {
    const cartJSON = localStorage.getItem("cart");
    return cartJSON ? JSON.parse(cartJSON) : [];
}

const cart = getCart();

function updateCartCounter() {
    const cartCounter = document.querySelector(".cart-counter");
    const totalItems = cart.reduce(
        (accumulator, item) => accumulator + item.quantity,
        0
    );
    cartCounter.innerText = totalItems;
}

document.addEventListener("click", function (event) {
    if (!event.target.matches(".add-to-cart")) return;

    const button = event.target;
    const productElement = button.closest(".product");
    const dataId = productElement.dataset.id;

    console.log('Cart:', cart);

    const product = {
        dataId: dataId,
        id: dataId,
        name: button.parentElement.querySelector("h3").innerText,
        price: parseFloat(
            button.parentElement.querySelector("p").innerText.slice(1)
        ),
        quantity: 1
    };

    const existingProduct = cart.find(
        (item) => item.id === product.id
    );

    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        cart.push(product);
        console.log('Cart:', cart);
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCounter();
    console.log('Cart:', cart);
});

// Call updateCartCounter() after the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    updateCartCounter();
});

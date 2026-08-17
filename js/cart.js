let cart = JSON.parse(
    localStorage.getItem("dairyCart")
) || [];


function addToCart(product) {

    const existing = cart.find(
        item => item.id === product.id &&
                item.name === product.name
    );

    if (existing) {

        existing.quantity++;

    } else {

        cart.push({
            ...product,
            quantity: 1
        });

    }

    saveCart();

    alert(product.name + " added to cart 🛒");

}


function saveCart() {

    localStorage.setItem(
        "dairyCart",
        JSON.stringify(cart)
    );

    updateCartCount();

}


function updateCartCount() {

    const count = cart.reduce(
        (total, item) => total + item.quantity,
        0
    );

    const element =
        document.getElementById("cartCount");

    if (element) {
        element.textContent = count;
    }

}


function displayCart() {

    const container =
        document.getElementById("cartItems");

    const totalElement =
        document.getElementById("cartTotal");

    if (!container) return;

    container.innerHTML = "";

    let total = 0;

    cart.forEach((item, index) => {

        const itemTotal =
            Number(item.price) * item.quantity;

        total += itemTotal;

        container.innerHTML += `

            <div class="card">

                <h3>${item.name}</h3>

                <p>
                    ₹${item.price}
                    ×
                    ${item.quantity}
                </p>

                <p>
                    Total:
                    ₹${itemTotal}
                </p>

                <button
                    class="buy-btn"
                    onclick="removeFromCart(${index})">

                    Remove

                </button>

            </div>

        `;

    });

    totalElement.textContent = total;

}


function removeFromCart(index) {

    cart.splice(index, 1);

    saveCart();

    displayCart();

}


document.addEventListener(
    "DOMContentLoaded",
    function () {

        updateCartCount();
        displayCart();

    }
);
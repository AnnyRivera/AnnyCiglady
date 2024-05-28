const products = [
    { id: 1, name: 'Manzana', description: 'Manzana roja fresca', image: 'images/1.jpg', price: 30 },
    { id: 2, name: 'Banana', description: 'Plátanos amarillos maduros', image: 'images/2.jpg', price: 25  },
    { id: 3, name: 'Naranja', description: 'Naranjas jugosas', image: 'images/4.jpg', price: 20  },
    { id: 4, name: 'Fresa', description: 'Fresas frescas', image: 'images/5.jpg', price: 60  },
    { id: 5, name: 'Uvas', description: 'Uvas dulces', image: 'images/3.jpg', price: 40  },
    { id: 6, name: 'Mango', description: 'Mangos dulces', image: 'images/6.jpg', price: 38  }
];

const cart = [];

function displayProducts() {
    const productList = document.getElementById('productList');
    productList.innerHTML = '';
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');

        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>Precio: $${product.price}</p>
        `;

        productList.appendChild(productCard);
    });
}

function addToCart(productId) {
    const product = products.find(product => product.id === productId);
    cart.push(product);
    displayCart();
}

function displayCart() {
    const cartItems = document.getElementById('cartItems');
    cartItems.innerHTML = '';

    cart.forEach(product => {
        const cartItem = document.createElement('li');
        cartItem.textContent = product.name;
        cartItems.appendChild(cartItem);
    });
}

function searchProducts() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const filteredProducts = products.filter(product => 
        product.name.toLowerCase().includes(searchInput) || 
        product.description.toLowerCase().includes(searchInput)
    );

    const productList = document.getElementById('productList');
    productList.innerHTML = '';

    filteredProducts.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');

        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>Precio: $${product.price}</p>
        `;

        productList.appendChild(productCard);
    });
}

function checkout() {
    document.getElementById('paymentModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('paymentModal').style.display = 'none';
}

document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
    if (paymentMethod === 'card') {
        const cardNumber = document.getElementById('cardNumber').value;
        const cardExpiry = document.getElementById('cardExpiry').value;
        const cardCVC = document.getElementById('cardCVC').value;
        if (!cardNumber || !cardExpiry || !cardCVC) {
            alert('Por favor complete todos los detalles de la tarjeta.');
            return;
        }
    }
    printReceipt(paymentMethod);
    closeModal();
});

function printReceipt(paymentMethod) {
    const receiptItems = document.getElementById('receiptItems');
    const totalAmount = document.getElementById('totalAmount');
    receiptItems.innerHTML = '';
    let total = 0;
    cart.forEach(product => {
        const receiptItem = document.createElement('li');
        receiptItem.textContent = product.name;
        receiptItems.appendChild(receiptItem);
        total += product.price;
    });
    totalAmount.textContent = `Total: $${total.toFixed(2)} - Pagado con ${paymentMethod}`;
    document.getElementById('receipt').style.display = 'block';
    cart.length = 0;
    displayCart();
}

document.querySelectorAll('input[name="paymentMethod"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const cardDetails = document.getElementById('cardDetails');
        if (this.value === 'card') {
            cardDetails.style.display = 'block';
        } else {
            cardDetails.style.display = 'none';
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    displayProducts();
});

function logout() {
    // Aquí iría el código para cerrar la sesión, como redireccionar a la página de inicio de sesión o eliminar la información de la sesión.
    // Por ejemplo:
    window.location.href = 'index1.php'; // Si estás usando PHP para manejar la sesión.
    // localStorage.removeItem('token'); // Si estás usando localStorage.
    console.log("Sesión cerrada");
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .checkout-page {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            border-radius: 5px;
        }

        .checkout-page h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .checkout-page p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .cart-header, .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .cart-header {
            font-weight: bold;
            text-transform: uppercase;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-header h3, .cart-item h3 {
            text-align: left;
            flex-basis: 35%;
            margin: 0;
            font-size: 16px;
        }

        .cart-header p, .cart-item p {
            text-align: right;
            flex-basis: 20%;
            margin: 0;
            font-size: 14px;
        }

        .tax-display, .total-display {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .tax-display {
            margin-top: 20px;
            margin-bottom: -25px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-back {
            background-color: #ccc;
            color: #333;
        }
        .receipt-container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: white;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    border-radius: 5px;
}

.receipt-page .cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 0;
    border-bottom: 1px solid #ccc;
}

.receipt-page .cart-item:last-child {
    border-bottom: none;
}

.receipt-page .cart-item h3,
.receipt-page .cart-item p {
    margin: 0;
    font-size: 14px;
}

.receipt-container { width: 300px; margin: 0 auto; font-size: 14px; } .barcode-image { display: block; margin: 0 auto; width: 100%; height: auto; max-height: 100px; }

    </style>
</head>
<body>

<div class="container">
    <div class="checkout-page">
        <h1>Checkout</h1>
        <p>Bring your itemized receipt into the store and have an associate scan at the front desk to finish paying.</p>
        <div class="cart-items">
        </div>
        <div class="tax-display">
            <h3>Tax:</h3>
            <p class="tax"></p>
        </div>
        <div class="total-display">
            <h3>Total:</h3>
            <p class="total"></p>
        </div>
        <div class="buttons">
        <a href="services.php" class="btn btn-back">Back</a>
        <button class="btn btn-view-receipt">View Receipt</button>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.4.4/lz-string.min.js"></script>

    <script>

function getCart() {
        const cartJSON = localStorage.getItem("cart");
        return cartJSON ? JSON.parse(cartJSON) : [];
    }

document.addEventListener("DOMContentLoaded", function () {
    const cartItemsContainer = document.querySelector(".cart-items");
    const taxDisplay = document.querySelector(".tax");
    const totalDisplay = document.querySelector(".total");

    function displayCartItems() {
        const cart = getCart();
        let totalPrice = 0;

        const cartHeader = document.createElement("div");
        cartHeader.classList.add("cart-header");
        cartHeader.innerHTML = `
            <h3>Item</h3>
            <p>Price</p>
            <p>Quantity</p>
            <p>Subtotal</p>
        `;
        cartItemsContainer.appendChild(cartHeader);

        cart.forEach((item ) => {
let cartItem = document.createElement("div");
cartItem.classList.add("cart-item");
const itemSubtotal = item.price * item.quantity;
        totalPrice += itemSubtotal;

        cartItem.innerHTML = `<h3>${item.name}</h3>
            <p>$${item.price.toFixed(2)}</p>
            <p>${item.quantity}</p>
            <p>$${itemSubtotal.toFixed(2)}</p>
        `;
        cartItemsContainer.appendChild(cartItem);
});

const tax = totalPrice * 0.0625;
const grandTotal = totalPrice + tax;

taxDisplay.textContent = `$${tax.toFixed(2)}`;
totalDisplay.textContent = `$${grandTotal.toFixed(2)}`;
}

displayCartItems();
});

function generateReceipt() {
    const cart = getCart();

    console.log('Cart:', cart);

    let totalPrice = 0;
    cart.forEach(item => {
        item.subtotal = item.price * item.quantity;
        totalPrice += item.subtotal;
    });

    const tax = totalPrice * 0.065;
    const grandTotal = totalPrice + tax;

    const cartDataString = cart.map(item => `${item.id}-${item.quantity}${String.fromCharCode(13)}`).join('');

    const canvas = document.createElement("canvas");
    document.body.appendChild(canvas);

    JsBarcode(canvas, cartDataString, {
        format: "CODE128",
        displayValue: false,
        width: 1,
        height: 80,
        fontSize: 16,
        margin: 10,
        background: "white",
        lineColor: "black"
    });

    const barcodeImage = new Image();
    barcodeImage.src = canvas.toDataURL("image/png");
    barcodeImage.classList.add("barcode-image");

    document.body.removeChild(canvas);

    const receiptWindow = window.open("", "_blank");
    receiptWindow.document.write("<html><head><title>Receipt</title><style>");
    receiptWindow.document.write(document.querySelector("style").textContent);
    receiptWindow.document.write(".receipt-container { width: 300px; margin: 0 auto; font-size: 14px; } .barcode-image { display: block; margin: 0 auto; width: 100%; height: auto; max-height: 100px; }");
    receiptWindow.document.write("</style></head><body>");
    receiptWindow.document.write("<div class='receipt-container'>");
    receiptWindow.document.write("<h1 style='text-align: center'>Online Receipt</h1>");
    receiptWindow.document.write("<div class='item-list'>");
    cart.forEach(item => {
    receiptWindow.document.write(`<p><span>${item.name} - x${item.quantity}</span><strong style="float: right;">$${item.subtotal.toFixed(2)}</strong></p>`);
});
    receiptWindow.document.write("</div>");
    receiptWindow.document.write(`<p style="margin-top: 40px; margin-bottom: 5px;">Subtotal: <span style="float: right;">$${totalPrice.toFixed(2)}</span></p>`);
receiptWindow.document.write(`<p style="margin-top: 5px;">Tax: <span style="float: right;">$${tax.toFixed(2)}</span></p>`);
receiptWindow.document.write(`<strong><p style="margin-top: 5px; margin-bottom: 10px;">Total: <span style="float: right; font-weight: bold;">$${grandTotal.toFixed(2)}</span></p></strong>`);
receiptWindow.document.write("<p style='text-align: center;'>Please have an associate scan the barcode below at the front register to finalize payment.</p>");
    receiptWindow.document.write(barcodeImage.outerHTML);
    receiptWindow.document.write("</div>");
    receiptWindow.document.write("</body></html>");
    receiptWindow.document.close();
    setTimeout(function() {
    receiptWindow.print();
  }, 250);
}
            const viewReceiptBtn = document.querySelector(".btn-view-receipt");
            viewReceiptBtn.addEventListener("click", generateReceipt);
</script>
</body>
</html>

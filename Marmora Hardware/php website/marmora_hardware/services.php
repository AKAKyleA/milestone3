<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Services - Marmora Hardware</title>
</head>
<body>

<div id="cart-page" class="cart-page">
    <div class="cart-page-header">
        <h2>Cart</h2>
        <span class="close-btn" id="close-btn">&#10005;</span>
    </div>
    <div class="cart-header">
    <p class="header-item">Name</p>
    <p class="header-item">Quantity</p>
    <p class="header-item">Total</p>
</div>
    <div class="cart-content"></div>
</div>


<header>
        <div class="top-bar">
            <p>29 S Shore Rd, Marmora, NJ 08223</p>
            <p>Mon-Sat: 8am-5pm, Sun: 9am-3pm</p>
        </div>
        <nav>
            <div class="logo-container">
                <img src="images/logo.png" alt="Marmora Hardware Logo" width="250" height="100">
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="cart-icon" style="position: relative; display: inline-block; width: 50px; height: 50px;">
    <img src="images/cart.jpg" alt="Cart" style="display: block; width: 100%; height: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="cart-counter" style="position: absolute; top: -10px; right: -10px; width: 24px; height: 24px; background-color: #ff0000; border-radius: 50%; text-align: center; color: #ffffff; font-size: 14px; line-height: 24px;">
    </div>
</div>


                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '<a href="account.php" class="login-link settings-link"><button class="login-btn">Settings</button></a>';
                } else {
                    echo '<a href="login.php" class="login-link"><button class="login-btn">Login</button></a>';
                }
                ?>
            </div>
</nav>
        </nav>
    </header>
    <main>

    <section class="product-section" id="lawn">
        <h2>Lawn & Garden Care</h2>

        <div class="product" data-id="G1">
            <img src="images/product-images/black_mulch.png" alt="mulch">
            <h3>Black Mulch</h3>
            <p>$5.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        
        <div class="product" data-id="G2">
            <img src="images/product-images/brown_mulch.png" alt="mulch">
            <h3>Brown Mulch</h3>
            <p>$5.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G3">
            <img src="images/product-images/red_mulch.png" alt="mulch">
            <h3>Red Mulch</h3>
            <p>$5.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G4">
            <img src="images/product-images/16qt_potting.png" alt="soil">
            <h3>16QT Potting Mix</h3>
            <p>$11.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G5">
            <img src="images/product-images/1cu_potting.png" alt="soil">
            <h3>1CUFT Potting Mix</h3>
            <p>$13.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G6">
            <img src="images/product-images/2cu_potting.png" alt="soil">
            <h3>2CUFT Potting Mix</h3>
            <p>$18.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G7">
            <img src="images/product-images/garden_soil.png" alt="soil">
            <h3>1CUFT Garden Soil</h3>
            <p>$7.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G8">
            <img src="images/product-images/top_soil.png" alt="soil">
            <h3>40LB TOP SOIL</h3>
            <p>$4.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G9">
            <img src="images/product-images/6cuft_wheelbarrow.png" alt="wheelbarrow">
            <h3>6CUFT Poly Wheelbarrow</h3>
            <p>$99.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G10">
            <img src="images/product-images/8cuft_wheelbarrow.png" alt="wheelbarrow">
            <h3>8CUFT Poly Wheelbarrow</h3>
            <p>$149.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="G11">
            <img src="images/product-images/6cuft_wheelbarrow_steel.png" alt="wheelbarrow">
            <h3>6CUFT Steel Wheelbarrow</h3>
            <p>$114.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </section>


    <div class="product-section">
    <h2>Trash Cans</h2>
    <div class="product" data-id="T1">
        <img src="images/product-images/black_trashcan_wheels.png">
        <h3>32GAL Wheel Trashcan</h3>
        <p>$32.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="T2">
        <img src="images/product-images/green_trashcan.png" alt="Trash Can 3">
        <h3>32GAL Green Trashcan</h3>
        <p>$36.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="T3">
        <img src="images/product-images/green_trashcan_square.png" alt="Trash Can 4">
        <h3>30GAL Rect. Trashcan</h3>
        <p>$28.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="T4">
        <img src="images/product-images/recycle_big.png" alt="Trash Can 5">
        <h3>32GAL Blue Recycle</h3>
        <p>$32.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="T5">
        <img src="images/product-images/recycle_small.png" alt="Trash Can 6">
        <h3>14GAL Recycle Box</h3>
        <p>$23.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
</div>




    <section class="product-section" id="lumber">
        <h2>Lumber</h2>

        <div class="product"  data-id="L1">
            <img src="images/product-images/lumber.jpg">
            <h3>1x3x8 Furring</h3>
            <p>$4.79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L2">
            <img src="images/product-images/lumber.jpg">
            <h3>2x3x8 Hem Fir</h3>
            <p>$8.89</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L3">
            <img src="images/product-images/lumber.jpg">
            <h3>2x4x8 Hem Fir</h3>
            <p>$7.49</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L4">
            <img src="images/product-images/lumber.jpg">
            <h3>2x6x8 Hem Fir</h3>
            <p>$10.79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L5">
            <img src="images/product-images/lumber.jpg">
            <h3>2x8x8 Hem Fir</h3>
            <p>$12.59</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L6">
            <img src="images/product-images/lumber.jpg">
            <h3>2x10x8 Hem Fir</h3>
            <p>$25.50</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L7">
            <img src="images/product-images/lumber.jpg">
            <h3>1x4x8 Pressure Treated</h3>
            <p>$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L8">
            <img src="images/product-images/lumber.jpg">
            <h3>2x4x8 Pressure Treated</h3>
            <p>$9.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L9">
            <img src="images/product-images/lumber.jpg">
            <h3>2x6x8 Pressure Treated</h3>
            <p>$14.49</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L10">
            <img src="images/product-images/lumber.jpg">
            <h3>2x8x8 Pressure Treated</h3>
            <p>$18.69</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L11">
            <img src="images/product-images/lumber.jpg">
            <h3>2x10x8 Pressure Treated</h3>
            <p>$24.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L12">
            <img src="images/product-images/4x4x8.png">
            <h3>4x4x8 Pressure Treated</h3>
            <p>$25.80</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L13">
            <img src="images/product-images/5x4x6.png">
            <h3>5/4x6 Pressure Treated</h3>
            <p>$18.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L14">
            <img src="images/product-images/half_48.png">
            <h3>1/2 4x8 CDX</h3>
            <p>$29.95</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L15">
            <img src="images/product-images/lauan.png">
            <h3>1/4 Lauan</h3>
            <p>$27.95</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product"  data-id="L16">
            <img src="images/product-images/half_sheetrock.png">
            <h3>1/2 4x8 Sheetrock Regular</h3>
            <p>$19.89</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="L17">
            <img src="images/product-images/half_sheetrock_green.png">
            <h3>1/2 4x8 Sheetrock Green</h3>
            <p>$22.49</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="L18">
            <img src="images/product-images/asphalt.jpg" alt="asphalt15">
            <h3>Asphalt Roofing Felt #15</h3>
            <p>$33.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="L19">
            <img src="images/product-images/asphalt.jpg" alt="asphalt30">
            <h3>Asphalt Roofing Felt #30</h3>
            <p>$33.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

    </section>



        <section class="product-section">
            <h2>Concrete</h2>

            <div class="product" data-id="C1">
                <img src="images/product-images/concrete.png" alt="Concrete Sample">
                <h3>60LB Concrete Mix</h3>
                <p>$7.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C2">
                <img src="images/product-images/mortar_mix.png" alt="Concrete Sample">
                <h3>60LB Mortar Mix Type N</h3>
                <p>$10.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C2">
                <img src="images/product-images/mortar_mix.png" alt="Concrete Sample">
                <h3>10LB Mortar Mix</h3>
                <p>$4.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C3">
                <img src="images/product-images/playsand.png" alt="Concrete Sample">
                <h3>40LB Play Sand</h3>
                <p>$7.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C4">
                <img src="images/product-images/2x8x16.png" alt="Concrete Sample">
                <h3>2" x 8" x 16" Block</h3>
                <p>$3.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C5">
                <img src="images/product-images/4x8x16.png" alt="Concrete Sample">
                <h3>4" x 8" x 16" Block</h3>
                <p>$4.89</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

            <div class="product" data-id="C6">
                <img src="images/product-images/8x8x16.png" alt="Concrete Sample">
                <h3>8" x 8" x 16" Block</h3>
                <p>$5.49</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

        </section>






        <section class="product-section" id="plumbing">
    <h2>Plumbing</h2>
    <div class="product" data-id="P1">
        <img src="images/product-images/pvc.png">
        <h3>PVC 1/2 in. x 10 ft sch40</h3>
        <p>$7.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P2">
    <img src="images/product-images/pvc.png">
        <h3>PVC 3/4 in. x 10 ft sch40</h3>
        <p>$9.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P3">
    <img src="images/product-images/pvc.png">
        <h3>PVC 1 in. x 10 ft sch40</h3>
        <p>$13.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P4">
    <img src="images/product-images/pvc.png">
        <h3>PVC 1-1/4 in. x 10 ft sch40</h3>
        <p>$15.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P5">
    <img src="images/product-images/pvc.png">
        <h3>PVC 1-1/2 in. x 10 ft sch40</h3>
        <p>$19.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P6">
    <img src="images/product-images/pvc.png">
        <h3>PVC 2 in. x 10 ft sch40</h3>
        <p>$24.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P7">
    <img src="images/product-images/pvc.png">
        <h3>PVC 3 in. x 10 ft sch40</h3>
        <p>$42.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P8">
    <img src="images/product-images/pvc.png">
        <h3>PVC 4 in. x 10 ft sch40</h3>
        <p>$59.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P9">
    <img src="images/product-images/pvc.png">
        <h3>PVC 4 in. x 10 ft Sewer/Drainage Perforated</h3>
        <p>$28.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P10">
    <img src="images/product-images/pvc.png">
        <h3>PVC 4 in. x 10 ft Sewer/Drainage sch80</h3>
        <p>$14.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P11">
    <img src="images/product-images/abs.png">
        <h3>ABS 1-1/2 in. x 10 ft sch40</h3>
        <p>$16.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P12">
    <img src="images/product-images/abs.png">
        <h3>ABS 2 in. x 10 ft sch40</h3>
        <p>$11.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P13">
    <img src="images/product-images/abs.png">
        <h3>ABS 3 in. x 10 ft sch40</h3>
        <p>$20.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P14">
    <img src="images/product-images/pex_red.png">
        <h3>PEX 1/2 in. x 10 ft Red</h3>
        <p>$4.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P15">
    <img src="images/product-images/pex_red.png">
        <h3>PEX 3/4 in. x 10 ft Red</h3>
        <p>$6.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P16">
    <img src="images/product-images/pex_blue.png">
        <h3>PEX 1/2 in. x 10 ft Blue</h3>
        <p>$4.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P17">
    <img src="images/product-images/pex_blue.png">
        <h3>PEX 3/4 in. x 10 ft Blue</h3>
        <p>$6.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P18">
    <img src="images/product-images/cpvc.png">
        <h3>CPVC 1/2 in. x 10 ft</h3>
        <p>$5.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P19">
    <img src="images/product-images/cpvc.png">
        <h3>CPVC 3/4 in. x 10 ft</h3>
        <p>$9.49</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P20">
    <img src="images/product-images/copper.png">
        <h3>Copper 1/2 in. x 10 ft</h3>
        <p>$19.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P21">
    <img src="images/product-images/copper.png">
        <h3>Copper 3/4 in. x 10 ft</h3>
        <p>$27.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    </section>




    <div class="product-section" id="propane">
    <h2>Propane</h2>
    <div class="product" data-id="P1">
        <img src="images/product-images/propane_tank.jpg" alt="Propane Exchange">
        <h3>Propane Exchange</h3>
        <p>$23.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="P2">
        <img src="images/product-images/propane_tank.jpg" alt="Filled Propane Tank">
        <h3>New Propane Tank (Filled)</h3>
        <p>$59.99</p>
        <button class="add-to-cart">Add to Cart</button>
    </div>
</div>




    <section class="product-section" id="miscellaneous">
        <h2>Miscellaneous</h2>

        <div class="product" data-id="M1">
            <img src="images/product-images/solar_salt.jpg" alt="salt">
            <h3>Solar Salt</h3>
            <p>$9.49</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        
        <div class="product" data-id="M2">
            <img src="images/product-images/solar_salt_rust.jpg" alt="salt_rust">
            <h3>Rust Remover Pelletts</h3>
            <p>$11.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="M4">
            <img src="images/product-images/safestep_11.png" alt="salt_rust">
            <h3>11LB SafeStep Ice Melt</h3>
            <p>$14.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="M5">
            <img src="images/product-images/safestep_25.png" alt="salt_rust">
            <h3>25LB SafeStep Ice Melt</h3>
            <p>$18.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="M6">
            <img src="images/product-images/firewood.png">
            <h3>Firewood Bundle</h3>
            <p>$9.99</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product" data-id="M8">
            <img src="images/product-images/keys.png">
            <h3>Key Cutting</h3>
            <p>Price Varies</p>
            <button disabled>Call For Assistance</button>
        </div>

        <div class="product">
                <img src="images/product-images/adirondack_chair.png" alt="Adirondack Sample">
                <h3>Adirondack Chair</h3>
                <p>$24.99</p>
                <button disabled>Call For Availability</button>
        </div>

        <div class="product">
                <img src="images/product-images/adirondack_table.png" alt="Adirondack Sample">
                <h3>Adirondack Table</h3>
                <p>$19.99</p>
                <button disabled>Call For Availability</button>
        </div>

    </section>


    <footer>
        <div class="footer-top">
            <img src="images/truevalue.png" alt="Marmora Hardware Logo" width="200">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>29 S Shore Rd, Marmora, NJ 08223</p>
            <p>Phone: (609) 390-8499</p>
            <p>Mon-Sat: 8am-5pm, Sun: 9am-3pm</p>
            <a href="https://www.facebook.com/people/Marmora-Hardware/100032190926433/" target="_blank">Facebook</a>
        </div>
    </footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  const cartIcon = document.querySelector(".cart-icon");
  const cartPage = document.querySelector("#cart-page");
  const closeBtn = document.querySelector(".close-btn");
  const cartContent = document.querySelector(".cart-content");
  const addToCartButtons = document.querySelectorAll(".add-to-cart");

  cartIcon.addEventListener("click", function () {
    cartPage.classList.toggle("open");
    displayCart();
  });

  closeBtn.addEventListener("click", function () {
    cartPage.classList.toggle("open");
  });

  addToCartButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const product = button.parentElement;
    const name = product.querySelector("h3").textContent;
    const priceText = product.querySelector("p").textContent;
    const price = parseFloat(priceText.replace(/[^0-9.]+/g, ""));
    const dataId = product.getAttribute("data-id");
    addItemToCart(name, price, dataId);

    const addedToCartMessage = document.createElement("div");
    addedToCartMessage.classList.add("added-to-cart-message");
    addedToCartMessage.textContent = "Added to cart!";
    product.appendChild(addedToCartMessage);

    setTimeout(() => {
      addedToCartMessage.classList.add("visible");
    }, 50);

    setTimeout(() => {
      addedToCartMessage.classList.remove("visible");
      setTimeout(() => {
        product.removeChild(addedToCartMessage);
      }, 300);
    }, 3000);
  });
});



function addItemToCart(name, price, id) {
  let item = cart.find((item) => item.name === name && item.id === id);
  if (item) {
    item.quantity += 1;
  } else {
    cart.push({ name, price, quantity: 1, id });
  }
  displayCart();
  localStorage.setItem("cart", JSON.stringify(cart));
}


function incrementQuantity(id) {
  let item = cart.find((item) => item.id === id);
  if (item) {
    item.quantity += 1;
  }
  displayCart();
  localStorage.setItem("cart", JSON.stringify(cart));
}

function decrementQuantity(id) {
  let item = cart.find((item) => item.id === id);
  if (item) {
    item.quantity -= 1;
    if (item.quantity <= 0) {
      cart = cart.filter((item) => item.id !== id);
    }
  }
  displayCart();
  localStorage.setItem("cart", JSON.stringify(cart));
}


  function displayCart() {
  cartContent.innerHTML = "";

  let uniqueItemCount = 0;
  let totalItemCount = 0;
  for (let item of cart) {
    let cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");

    cartItem.innerHTML = `
    <h3>${item.name}</h3>
    <div class="qty-control">
        <span class="qty-arrow" onclick="decrementQuantity('${item.id}')">-</span>
        <span>${item.quantity}</span>
        <span class="qty-arrow" onclick="incrementQuantity('${item.id}')">+</span>
    </div>
    <p class="cart-item-total">$${(item.price * item.quantity).toFixed(2)}</p>
`;

    uniqueItemCount++;
    totalItemCount += item.quantity;
    cartContent.appendChild(cartItem);
  }

  if (uniqueItemCount > 12) {
    cartContent.style.maxHeight = "500px";
    cartContent.style.overflowY = "scroll";
  } else {
    cartContent.style.maxHeight = "none";
    cartContent.style.overflowY = "auto";
  }

  let cartCounter = document.querySelector('.cart-counter');
  cartCounter.textContent = totalItemCount;

  let cartTotal = document.createElement("div");
  cartTotal.classList.add("cart-total");
  let total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
  cartTotal.innerHTML = `<h3>Total:</h3><p>$${total.toFixed(2)}</p>`;
  cartContent.appendChild(cartTotal);

  let checkoutBtn = document.createElement("a");
  checkoutBtn.href = "checkout.php";
  checkoutBtn.classList.add("proceed-to-checkout");
  checkoutBtn.innerText = "Proceed to Checkout";
  cartContent.appendChild(checkoutBtn);
}

  window.decrementQuantity = decrementQuantity;
  window.incrementQuantity = incrementQuantity;
});


</script>

<script src="scripts.js"></script>

</body>
</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.ico" type="image/ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Our History - Marmora Hardware</title>
</head>
<body>
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
            <?php
    if (isset($_SESSION['loggedin'])) {
        echo '<a href="account.php" class="login-link settings-link"><button class="login-btn">Settings</button></a>';
    } else {
        echo '<a href="login.php" class="login-link"><button class="login-btn">Login</button></a>';
    }
?>
</nav>
        </nav>
    </header>
	
    <main>
        <section class="history-container" style="margin-top: -4px;">
            <div class="history-header">
                <h1 style="font-size: 2.5rem;">Our History</h1>
            </div>
            <div class="history-content">
                <div class="history-description">
                <p>Marmora Hardware, a local hardware store located in Marmora, New Jersey, has been providing quality products and exceptional customer service for over 65 years. The store's history began as Steelman's Hardware and later became Dietrich's in the 1950s, under the ownership of Paul Dietrich. In the early 1990s, the hardware store was taken over by Doug Corson and became known as Corson's Hardware. The store continued to be known for its vast selection of hardware products and its reputation for providing personalized service to the local community.</p>
<br>
<p>In April 1995, Christopher Antolini purchased the store from Doug Corson and renamed it Marmora Hardware, a name he came up with himself. Antolini, a local businessman, saw the potential of the hardware store and was committed to preserving its legacy. He believed in providing excellent customer service and ensuring that the store offered a vast selection of quality products at affordable prices.</p>
<br>
<p>Mike Ricchi manages the hardware store, and together with Antolini, they have continued to build on the store's reputation for providing excellent customer service and offering quality products. They have expanded the store's selection of products to include everything from tools and hardware to lawn and garden supplies, paint, and home improvement items.</p>
<br>
<p>Today, Marmora Hardware is a well-respected and trusted business in the local community. The store has grown over the years, but it has maintained its commitment to providing personalized service and quality products at affordable prices. Customers can trust that they will always find what they need at Marmora Hardware, and they can rely on the knowledgeable and friendly staff to help them with any questions or concerns they may have. Marmora Hardware is more than just a hardware store; it is a local institution that has become an essential part of the community.</p>

                </div>
                <div class="history-images" style="margin-bottom: 5px;">
    <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; margin-right: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <img src="images/old1.jpg" alt="Marmora Hardware History" style="width: 100%; height: 100%; object-fit: cover; position: absolute;" onmouseover="this.parentElement.style.transform='scale(1.05)'; this.parentElement.style.boxShadow='0 0 15px rgba(0, 0, 0, 0.4)';" onmouseout="this.parentElement.style.transform=''; this.parentElement.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)';">
    </div>
    <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <img src="images/history2.jpg" alt="Marmora Hardware History" style="width: 100%; height: 100%; object-fit: cover; position: absolute;" onmouseover="this.parentElement.style.transform='scale(1.05)'; this.parentElement.style.boxShadow='0 0 15px rgba(0, 0, 0, 0.4)';" onmouseout="this.parentElement.style.transform=''; this.parentElement.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)';">
    </div>
</div>
<div class="history-images" style="margin-bottom: 50px;">
    <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; margin-right: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <img src="images/history1.jpg" alt="Marmora Hardware History" style="width: 100%; height: 100%; object-fit: cover; position: absolute;" onmouseover="this.parentElement.style.transform='scale(1.05)'; this.parentElement.style.boxShadow='0 0 15px rgba(0, 0, 0, 0.4)';" onmouseout="this.parentElement.style.transform=''; this.parentElement.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)';">
    </div>
    <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <img src="images/old2.jpg" alt="Marmora Hardware History" style="width: 100%; height: 100%; object-fit: cover; position: absolute;" onmouseover="this.parentElement.style.transform='scale(1.05)'; this.parentElement.style.boxShadow='0 0 15px rgba(0, 0, 0, 0.4)';" onmouseout="this.parentElement.style.transform=''; this.parentElement.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)';">
    </div>
</div> 
            </div>
        </div>
        </section>
    </main> 
    
	
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

</body>
</html>

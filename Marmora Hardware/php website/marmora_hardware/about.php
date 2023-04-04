<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.ico" type="image/ico">
    <link rel="stylesheet" href="styles.css">
    <title>About Us - Marmora Hardware</title>
    <style>
        .section {
            padding: 50px;
            text-align: center;
        }
        .section-lightgray {
            background-color: lightgray;
        }
        .section-white {
            background-color: white;
        }
        .section img {
            max-width: 100%;
        }
        .history-text {
            text-align: left;
            display: inline-block;
            vertical-align: top;
            max-width: calc(50% - 20px);
        }
        .history-img {
            display: inline-block;
            vertical-align: top;
        }
        .staff-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            justify-items: center;
        }
        .staff-grid div {
            text-align: center;
        }
    </style>
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
        echo '<a href="logout.php" class="login-link logout-link"><button class="login-btn">Logout</button></a>';
        echo '<a href="account.php" class="login-link settings-link"><button class="login-btn">Settings</button></a>';
    } else {
        echo '<a href="login.html" class="login-link"><button class="login-btn">Login</button></a>';
    }
?>
</nav>
        </nav>
    </header>

    <main>
        <section class="about-page-header">
            <h1 style="font-size: 2.5rem;">Learn About Marmora Hardware</h1>
            <p>Marmora Hardware is a family-owned and operated store that has been serving the community since 1960. We take pride in<br>providing high-quality products and exceptional customer service to help you with any project, big or small. Our team is always<br> ready to assist you with a wide range of products, including power tools, hand tools, plumbing supplies, electrical <br>supplies, paint, and much more. We strive to offer a personalized shopping experience for all our customers.</p>
        </section>
    
        <section class="our-history">
            <div class="our-history-text">
                <h2 style="font-size: 2.5rem; margin-left: 10%;">Our History</h2>
                <p style="margin-left: 10%;">Since our humble beginnings in 1960, Marmora Hardware has grown to become a trusted name in the community. Our commitment to excellent service and quality products has earned us a reputation as a reliable source for hardware, tools, and more. Over the years, we have expanded our product offerings and adapted to the ever-changing needs of our customers, while maintaining the personalized touch that has set us apart from other stores. Our dedication to the community and our customers has been the cornerstone of our success, and we strive to continue building on our rich history and solid foundation. As we look towards the future, we aim to continue evolving and offering the best services to our valued customers.</p>
            </div>
            <div class="history-image">
                <img src="images/building.jpg" alt="Store History">
            </div>
        </section>
    
        <section class="marmora-today">
            <h2 style="font-size: 2.5rem;">Marmora Hardware Today</h2>
            <p>Today, Marmora Hardware is a staple of the community, providing a one-stop-shop for all your hardware needs. From our extensive selection of tools and materials to our knowledgeable and friendly staff, we are committed to helping you complete any project, no matter the size or complexity.<br><br>Our store has become a gathering place for do-it-yourself enthusiasts and professionals alike, offering expert advice and an unrivaled customer experience. As we look to the future, we remain dedicated to our customers and the community, constantly seeking new ways to innovate and improve our offerings to better serve your needs.</p>
        </section>
    
        <section class="meet-our-staff">
            <h2 style="font-size: 2.5rem;">Meet Our Staff</h2>
            <div class="staff-grid">
                <!-- Add other staff members here -->
                <div class="staff-member">
                    <img src="images/test.jpg" alt="Chris Antolini">
                    <p>Chris Antolini (Owner)</p>
                </div>
                <div class="staff-member">
                    <img src="images/test.jpg" alt="Michael Ricchi">
                    <p>Mike Ricchi (Manager)</p>
                </div>
                <div class="staff-member">
                    <img src="images/test.jpg" alt="John McCarthy">
                    <p>John McCarthy</p>
                </div>
                <div class="staff-member">
                    <img src="images/test.jpg" alt="Dale Banchi">
                <p>Dale Banchi</p>
            </div>
        </div>
        <img class="group-photo" src="images/group1.jpg" alt="Group Photo">
        <div class="additional-photos">
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; margin-right: 20px;">
                <img src="images/group2.jpg" alt="Additional Photo 1" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden;">
                <img src="images/group3.jpg" alt="Additional Photo 2" style="width: 100%; height: 100%; object-fit: cover;">
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
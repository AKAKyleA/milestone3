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
        echo '<a href="account.php" class="login-link settings-link"><button class="login-btn">Settings</button></a>';
    } else {
        echo '<a href="login.php" class="login-link"><button class="login-btn">Login</button></a>';
    }
?>
</nav>
        </nav>
    </header>

    <main>
    
        <section class="our-history">
            <div class="our-history-text">
                <h2 style="font-size: 2.5rem; margin-left: 10%;">Our History</h2>
                <p style="margin-left: 10%;">Since our humble beginnings in 1995, Marmora Hardware has grown to become a trusted name in the community. Our commitment to excellent service and quality products has earned us a reputation as a reliable source for hardware, tools, and more. Over the years, we have expanded our product offerings and adapted to the ever-changing needs of our customers, while maintaining the personalized touch that has set us apart from other stores. Our dedication to the community and our customers has been the cornerstone of our success, and we strive to continue building on our rich history and solid foundation. As we look towards the future, we aim to continue evolving and offering the best services to our valued customers.</p>
            </div>
            <div class="history-image">
                <img src="images/building.jpg" alt="Store History">
            </div>
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

        <section class="marmora-today">
    <p style="font-size: 1.2rem; line-height: 1.6em; margin-top: 25px;">Today, Marmora Hardware is a staple of the community, providing a one-stop-shop for all your hardware needs. We offer an extensive selection of high-quality tools, materials, and supplies, and our knowledgeable and friendly staff is always ready to assist you with any project, no matter the size or complexity.</p>
    <br>
    <p style="font-size: 1.2rem; line-height: 1.6em;">Our store has become a gathering place for do-it-yourself enthusiasts and professionals alike, where you can find expert advice and an unrivaled customer experience. We remain dedicated to our customers and the community, constantly seeking new ways to innovate and improve our offerings to better serve your needs. As we look to the future, we will continue to uphold our commitment to providing exceptional service and high-quality products to all our valued customers.</p>
</section>



        <img class="group-photo" src="images/group1.jpg" alt="Group Photo">
        <div class="additional-photos">
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; margin-right: 20px;">
                <img src="images/group2.jpg" alt="Additional Photo 1" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden;">
                <img src="images/group3.jpg" alt="Additional Photo 2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>

        <div class="additional-photos">
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden; margin-right: 20px;">
                <img src="images/group4.jpg" alt="Additional Photo 1" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="image-container" style="width: 400px; height: 400px; display: inline-block; position: relative; overflow: hidden;">
                <img src="images/group5.jpg" alt="Additional Photo 2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>

        <img class="group-photo" src="images/group6.jpg" alt="Group Photo">
        
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
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
    <title>Marmora Hardware</title>
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
    
    <section class="banner">
        <div class="carousel">
            <div><img src="images/banner2.png" alt="Banner Image 1"></div>
            <div><img src="images/banner1.png" alt="Banner Image 2"></div>
            <div><img src="images/banner3.png" alt="Banner Image 3"></div>
        </div>
    </section>
	
	<section class="why-choose-us">
    <img src="images/logo.png" alt="Marmora Hardware Logo" width="750" height="300" style="padding-bottom: 50px;">
    <p>Marmora Hardware has been providing exceptional products and services to our customers for over 60 years. We take pride in our ability to assist in any project, whether it's helping our in-store customers with DIY projects or supplying contractors with large-scale orders. Our goal is to become a one-stop-shop for all your hardware needs. Come visit us and let us help you tackle your next project!</p>
    <div class="button-grid">
    <a href="services.php" class="custom-btn" style="background-image: url('images/lumberyard.jpg');">
        <div class="btn-label">Lumber Yard</div>
    </a>
    <a href="services.php" class="custom-btn" style="background-image: url('images/lawn.JPG');">
        <div class="btn-label">Lawn & Garden</div>
    </a>
    <a href="services.php" class="custom-btn" style="background-image: url('images/screenrepair.jpg');">
        <div class="btn-label">Screen Repair</div>
    </a>
	</div>
	</section>
	
	
	
	<section class="featured-items">
    <div class="item-container">
        <img class="item" src="images/featured1.png" alt="Featured Item 1">
        <img class="item" src="images/featured2.jpg" alt="Featured Item 2">
        <img class="item" src="images/featured3.png" alt="Featured Item 3">
        <img class="item" src="images/featured4.jpg" alt="Featured Item 4">
        <img class="item" src="images/featured5.jpg" alt="Featured Item 5">
    </div>
	</section>

	
    <section class="lawn-garden" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1200px; margin: 0 auto;">
    <div class="image-container" style="width: 50%; margin-right: 20px;">
    <img src="images/lawngarden.JPG" alt="Lawn and Garden Care" style="width: 100%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); border-radius: 5px;">
    </div>
    <div class="text-container" style="width: 40%; max-width: 500px;">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Lawn and Garden Care</h2>
        <p style="font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">We offer a wide selection of products to help you maintain and enhance your lawn and garden. From tools and fertilizers to pest control products, we have everything you need to make your outdoor space flourish. Our knowledgeable staff is always available to assist you in choosing the best products for your specific needs. Visit us today and let us help you create the lawn and garden of your dreams.</p>
        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #008080; color: white; font-size: 1.2rem; text-decoration: none; border-radius: 5px;">Shop Now</a>
    </div>
</section>

<section class="plumbing-section" style="margin-bottom: 100px; display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1200px; margin: 0 auto;">
    <div class="text-container" style="width: 40%; max-width: 500px;">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Plumbing Services</h2>
        <p style="font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">At Marmora Hardware, we offer a full range of plumbing products and services to meet all your needs. From repairing leaky faucets to installing new plumbing systems, our experienced staff is here to help you every step of the way. We carry a wide selection of high-quality plumbing fixtures and accessories to make your plumbing projects a success. Come in today and let us help you with all your plumbing needs!</p>
        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #008080; color: white; font-size: 1.2rem; text-decoration: none; border-radius: 5px;">Learn More</a>
    </div>
    <div class="image-container" style="width: 50%; margin-left: 20px;">
        <img src="images/plumbing.jpg" alt="Plumbing Services Image" style="width: 100%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); border-radius: 5px;">
    </div>
</section>

<section class="lumber-yard" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; max-width: 1200px; margin: 0 auto;">
    <div class="image-container" style="width: 50%; margin-right: 20px;">
        <img src="images/lumber.jpg" alt="Lumber Yard Image" style="width: 100%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); border-radius: 5px;">
    </div>
    <div class="text-container" style="width: 40%; max-width: 500px;">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Lumber Yard</h2>
        <p style="font-size: 1rem; line-height: 1.5; margin-bottom: 20px;">Discover our fully stocked lumber yard at Marmora Hardware, where we cater to all your woodworking needs. From construction projects to custom furniture, our wide selection of high-quality lumber will provide the materials you need. Our knowledgeable staff is ready to assist you in finding the perfect lumber for your project. Visit Marmora Hardware today and let us help you bring your vision to life.</p>
        <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #008080; color: white; font-size: 1.2rem; text-decoration: none; border-radius: 5px;">Shop Now</a>
    </div>
</section>




<section class="services">
  <div class="service-item">
    <img src="images/propane.jpg" alt="Propane Exchanges">
    <h3>Propane Exchanges</h3>
    <p>Looking to replace your empty propane tank? Our propane exchange service ensures you always have a fresh tank on hand for your grilling needs. Bring your empty tank and exchange it for a full one in no time.</p>
    <a href="#" class="service-link">Learn More</a>
  </div>
  <div class="service-item">
    <img src="images/keycutting.jpg" alt="Key Cutting">
    <h3>Key Cutting</h3>
    <p>Never worry about losing your keys again. Our key cutting service provides fast and precise duplication of various types of keys. Trust Marmora Hardware to provide you with the best key cutting solutions.</p>
    <a href="#" class="service-link">Learn More</a>
  </div>
  <div class="service-item">
    <img src="images/screenrepair.jpg" alt="Screen Repairs">
    <h3>Screen Repairs</h3>
    <p>Don't let a damaged screen ruin your day. Our screen repair service fixes various types of screens for windows and doors, ensuring your home stays protected and bug-free. Let us help you keep your screens in top shape.</p>
    <a href="#" class="service-link">Learn More</a>
  </div>
  <div class="service-item">
    <img src="images/beachchairs.jpg" alt="Beach Chairs">
    <h3>Beach Chairs</h3>
    <p>Enjoy the sun, sand, and surf with our selection of beach chairs. Marmora Hardware offers a variety of comfortable and durable beach chairs to suit your needs. Make your beach day perfect with the right chair from our store.</p>
    <a href="#" class="service-link">Learn More</a>
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.carousel').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
            nextArrow: '<button type="button" class="slick-next">&#10095;</button>'
        });
    });
    </script>
</body>
</html>

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
    <title>Contact - Marmora Hardware</title>
    <style>
        .contact-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    margin: 2rem 0 4rem; /* 4rem is the new bottom margin */
    background-color: #f5f5f5;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

        .contact-info,
        .contact-form {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
        font-size: 18px;
        padding-left: 20px;
        }


        .contact-info h2,
        .contact-form h2 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-size: 24px;
        }

        .contact-info p {
            margin-bottom: 0.5rem;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
        }

        .contact-form button[type="submit"] {
            background-color: #0077cc;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .contact-form button[type="submit"]:hover {
            background-color: #005fa3;
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
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>Address:</strong> 29 S Shore Rd, Marmora, NJ 08223</p>
                <p><strong>Phone:</strong> (609) 390-8499</p>
                <p><strong>Email:</strong> info@marmorahardware.com</p>
                <p><strong>Hours:</strong> Mon-Sat: 8am-5pm, Sun: 9am-3pm</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.6398518463957!2d-74.64859835638835!3d39.26299811597503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0bf0cfd4784a7%3A0xdae3837d1d763a!2s29%20S%20Shore%20Rd%2C%20Marmora%2C%20NJ%2008223!5e0!3m2!1sen!2sus!4v1680202184173!5m2!1sen!2sus" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form id="contact-form" method="post">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea name="message" rows="4" placeholder="Your message..." required></textarea>
                <button type="submit">Submit</button>
                </form>
                </div>
                </div>
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
                <script>
                    document.getElementById("contact-form").addEventListener("submit", function(event) {
                        event.preventDefault();
                    
                        var formData = new FormData(event.target);
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "send_email.php", true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                alert(response.message);
                                if (response.status === "success") {
                                    event.target.reset();
                                }
                            }
                        };
                        xhr.send(formData);
                    });
                    </script>
                    
            </body>
            </html>

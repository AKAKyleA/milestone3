
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
    <title>Account</title>
    <style>
        body {
        align-items: center;
        justify-items: center;
        min-height: 100vh;
        background: #f5f5f5;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
    }
    
    header, footer {
  width: 100%;
}

    nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 2em 1em;
}

nav ul {
    display: flex;
    justify-content: space-around;
    width: 35%;
    margin-left: -1%;
}

nav li {
    list-style-type: none;
}

nav a {
    color: #333;
    text-decoration: none;
    font-size: 22px;
    padding: 12px 20px;
    display: inline-block;
}

nav a:not(.login-link):hover {
    background-color: lightgray;
    color: #ffffff;
}

.login-link {
    display: inline-block;
    margin-right: 240px;
}

.login-btn {
    background-color: white;
    color: #333;
    border: 2px solid #333;
    padding: 0.5em 1em;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

.login-btn:hover {
    background-color: #007bff;
    color: #ffffff;
    border-color: #007bff;
}

    .main-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
    }

    .logo {
        margin-bottom: 2em;
    }

    .account-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2em;
        padding-bottom: 2em;
    }

    .account-container {
        background-color: white;
        padding: 2em;
        border-radius: 10px;
        margin-top: 25px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .account-info {
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .account-info-text {
        display: flex;
        flex-direction: column;
    }

    .account-info span.value {
        font-weight: normal;
    }
        .account-info p {
            margin: 0.5em 0;
            font-weight: bold;
            font-size: 16px;
        }

        .account-container button,
        .account-container a {
            padding: 0.75em;
            border: 1px solid #0077cc;
            border-radius: 5px;
            background-color: #0077cc;
            color: white;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }

        .account-container button:hover,
        .account-container a:hover {
            background-color: #005fa3;
        }

        .logout-btn {
            display: block;
            margin-top: 1em;
            margin-left: auto;
            margin-right: auto;
            padding: 0.75em;
            border: 1px solid #0077cc;
            border-radius: 5px;
            background-color: #0077cc;
            color: white;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #005fa3;
            margin-bottom: 2em; /* Add this line for bottom margin */
        }
        .account-info span.value {
        font-weight: normal;
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
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="history.html">History</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
    
    <div class="account-grid">
        <div class="account-container">
            <h2>Account Information</h2>
            <div class="account-info">
                <div class="account-info-text">
                    <p>First Name: <span class="value"><?php echo
$_SESSION['firstname']; ?></span></p>
                    <p>Last Name: <span class="value">Doe</span></p>
                    <p>Email: <span class="value">johndoe@example.com</span></p>
                </div>
                <!-- Buttons available to all account types -->
                <button onclick="window.location.href='confirm_password.html'">Edit Account</button>
                <button onclick="window.location.href='order_history.html'">View Order History</button>
            </div>
            
       
            
    </div>
    <!-- Employee section -->
    <?php 
    

    if ($_SESSION["isEmployee"] == 1) { ?>
    <div class="account-container">
        <h2>Employee Information</h2>
        <div class="account-info">
            <div class="account-info-text">
                <p>First Name: <span class="value"><?php echo
$_SESSION['firstname']; ?></span></p>
                <p>Last Name: <span class="value">Doe</span></p>
                <p>Email: <span class="value">johndoe@example.com</span></p>
            </div>
            <p>Employee ID: <!-- Display employee ID here --></p>
            <button onclick="window.location.href='view_schedule.html'">View Schedule</button>
        </div>
    </div>
    <?php } ?>
</div>
<div class="account-grid">
    <!-- Manager section -->
<?php if ($_SESSION["isManager"] == 1) { ?>
    <div class="account-container">
        <h2 style="text-align: center; margin-bottom: 1em;">Manager Information</h2>
        <div style="text-align: center;">
            <button onclick="window.location.href='create_schedule_form.html'">Create Schedules</button>
            <button onclick="window.location.href='log_sales.html'" >Log Sales</button>
        </div>
    </div>
<?php } ?>

<!-- Admin section -->
<?php if ($_SESSION["isAdmin"] == 1) { ?>
    <div class="account-container">
        <h2 style="text-align: center; margin-bottom: 1em;">Admin Information</h2>
        <div style="text-align: center;">
            <button onclick="window.location.href='edit_permissions.html'">Edit Accounts</button>
            <button onclick="window.location.href='view_sales.html'">View Sales</button>
        </div>
    </div>
<?php } ?>
</div>

<button style="margin-bottom: 25px;" class="logout-btn" onclick="window.location.href='logout.php'">Log Out</button>
</div>

<footer>
    <div class="footer-top">
        <img src="images/truevalue.png" alt="Marmora Hardware Logo" width="200">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
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

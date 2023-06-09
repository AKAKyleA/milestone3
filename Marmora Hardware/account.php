
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
    margin-right: 365px;
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
    background-color: #3498db;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px; /* Increase font size */
    transition: background-color 0.3s;
    border-radius: 4px;
    padding: 10px 20px; /* Increase padding for a larger button */
    cursor: pointer;
    margin-right: 20px; /* Add margin to move the button slightly to the left */
}

.login-btn:hover {
    background-color: #2980b9;
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

    .account-wrapper {
            width: 100%;
            max-width: 800px;
        }

        .account-grid {
            display: flex;
            flex-direction: column;
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
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

</nav>
        </nav>
    </header>

    <div class="main-content">
    <div class="account-wrapper">
        <div class="account-grid">
            <!-- Account Information -->
            <div class="account-container">
                <h2>Account Information</h2>
                <div class="account-info">
                    <div class="account-info-text">
                        <p>First Name: <span class="value"><?php echo $_SESSION['firstname']; ?></span></p>
                        <p>Last Name: <span class="value"><?php echo $_SESSION['lastname']; ?></span></p>
                        <p>Email: <span class="value"><?php echo $_SESSION['email']; ?></span></p>
                    </div>
                    <!-- Buttons available to all account types -->
                    <button onclick="window.location.href='confirm_password.php'">Edit Account</button>
                    <button onclick="window.location.href='order_history.php'">View Order History</button>
                </div>
            </div>

            <!-- Employee section -->
            <?php 
            if ($_SESSION["isEmployee"] == 1) { ?>
                <div class="account-container">
                    <h2>Employee Information</h2>
                    <div class="account-info">
                        <p>Employee ID: <span class="value">#<?php echo $_SESSION['id']; ?></span></p>
                        <button onclick="window.location.href='view_schedule.php'">View Schedule</button>
                    </div>
                </div>
            <?php } ?>

            <!-- Manager section -->
            <?php if ($_SESSION["isManager"] == 1) { ?>
                <div class="account-container">
                    <h2 style="text-align: center; margin-bottom: 1em;">Manager Information</h2>
                    <div style="text-align: center;">
                        <button onclick="window.location.href='create_schedule_form.php'">Create Schedules</button>
                        <button onclick="window.location.href='all_schedules.php'" >View Schedules</button>
                    </div>
                </div>
            <?php } ?>

            <!-- Admin section -->
            <?php if ($_SESSION["isAdmin"] == 1) { ?>
                <div class="account-container">
                    <h2 style="text-align: center; margin-bottom: 1em;">Admin Information</h2>
                    <div style="text-align: center;">
                        <button onclick="window.location.href='edit_permissions.php'">Edit Accounts</button>
                        <button onclick="window.location.href='view_sales.php'">View Sales</button>
                    </div>
                </div>
            <?php } ?>

        </div> <!-- account-grid -->
    </div> <!-- account-wrapper -->

    <button style="margin-bottom: 25px;" class="logout-btn" onclick="window.location.href='logout.php'">Log Out</button>
</div>

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
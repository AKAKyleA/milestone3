<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hardstore";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['current_password']) && isset($_POST['repeat_current_password'])) {
    $current_password = $_POST['current_password'];
    $repeat_current_password = $_POST['repeat_current_password'];

    if ($current_password === $repeat_current_password) {
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$current_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            header("Location: edit_settings.php");
            exit();
        } else {
            $error_message = "The password you entered is incorrect.";
        }
    } else {
        $error_message = "Passwords do not match.";
    }
}

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
    <title>Confirm Identity</title>
    <style>
    body {
        display: grid;
        grid-template-rows: auto 1fr;
        align-items: center;
        justify-items: center;
        min-height: 100vh;
        background: #f5f5f5;
        font-family: Arial, sans-serif;
    }

    .confirm-password-container {
        background-color: white;
        padding: 3em 4em;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        min-height: 250px;
    }

    .confirm-password-container h2 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 1.5em;
        font-size: 28px;
        font-weight: bold;
    }

    .confirm-password-form {
        display: flex;
        flex-direction: column;
        gap: 1.5em;
    }

    .confirm-password-form input,
    .confirm-password-form button {
        padding: 0.75em;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 18px;
    }

    .confirm-password-form input[type="submit"],
    .confirm-password-form button[type="button"] {
        background-color: #0077cc;
        color: white;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .confirm-password-form input[type="submit"]:hover,
    .confirm-password-form button[type="button"]:hover {
        background-color:     #005fa3;
}

.confirm-password-form button[type="button"].go-back-btn {
    background-color: #f5f5f5;
    color: #0077cc;
    border: 1px solid #0077cc;
    margin-top: -0.5em;
}

.confirm-password-form button[type="button"].go-back-btn:hover {
    background-color: #e0e0e0;
}

.error-message {
color: red;
height: 20px;
display: flex;
align-items: center;
justify-content: center;
}

</style>
</head>
<body>
    <img src="images/logo-transparent.png" alt="Marmora Hardware Logo" width="400" height="180">
    <div class="confirm-password-container">
        <h2>Confirm Identity</h2>
        <form class="confirm-password-form" action="confirm_password.php" method="post">
            <input type="password" name="current_password" placeholder="Enter Password" required>
            <input type="password" name="repeat_current_password" placeholder="Re-Enter Password" required>
            <?php if (!empty($error_message)) : ?>
            <div class="error-message">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>
            <input type="submit" value="Next">
            <button type="button" class="go-back-btn" onclick="window.location.href='account.php'">Go Back</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hardstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error_message=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error_message=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {
                if (!empty($_POST["remember"])) {
                    setcookie("email", $uname, time() + (10 * 365 * 24 * 60 * 60));
                    setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60));
                } else {
                    if (isset($_COOKIE["email"])) {
                        setcookie("email", "");
                    }
                    if (isset($_COOKIE["password"])) {
                        setcookie("password", "");
                    }
                }

                $_SESSION['isAdmin'] = $row['isAdmin'];
                $_SESSION['isManager'] = $row['isManager'];
                $_SESSION['isEmployee'] = $row['isEmployee'];
                $_SESSION['id'] = $row['ID'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['loggedin'] = true;

                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error_message=Incorrect email or password");
                exit();
            }
        } else {
            header("Location: login.php?error_message=Incorrect email or password");
            exit();
        }
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
    <title>Log In</title>
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

        .login-container {
        background-color: white;
        padding: 3em 4em;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 1.5em;
        font-size: 28px;
        font-weight: bold;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 1.5em;
    }

    .login-form input,
    .login-form button {
        padding: 0.75em;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 18px;
    }

    .login-form input[type="submit"],
    .login-form button[type="button"] {
        background-color: #0077cc;
        color: white;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .login-form input[type="submit"]:hover,
    .login-form button[type="button"]:hover {
        background-color: #005fa3;
    }

    .login-form button[type="button"].go-back-btn {
        background-color: #f5f5f5;
        color: #0077cc;
        border: 1px solid #0077cc;
        margin-top: -0.5em;
    }

    .login-form button[type="button"].go-back-btn:hover {
        background-color: #e0e0e0;
    }

    .additional-options {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 1em;
    }

    .additional-options a {
        color: #0077cc;
        text-decoration: none;
    }

    .additional-options a:hover {
        text-decoration: underline;
    }

    .error-message {
        color: red;
        font-weight: bold;
        text-align: center;
        margin-bottom: 1em;
    }
</style>
</head>
<body>
    <img src="images/logo-transparent.png" alt="Marmora Hardware Logo" width="400" height="180">
    <div class="login-container">
        <h2>Log In</h2>
        <?php
        if (isset($_GET['error_message'])) {
            echo '<p class="error-message">' . htmlspecialchars($_GET['error_message']) . '</p>';
        }
        ?>
        <form class="login-form" action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <button type="button" class="go-back-btn" onclick="window.location.href='index.php'">Go Back</button>
        </form>
        <div class="additional-options">
            <p style="margin-top: 5px;">Don't have an account? <a href="signup.html">Sign up.</a></p>
            <a href="forgot-password.html">Forgot Password?</a>
        </div>
    </div>
</body>
</html>

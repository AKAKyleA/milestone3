<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.ico" type="image/ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Edit Account Settings</title>
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

        .settings-container {
            margin-top: -2em;
            background-color: white;
            padding: 3em 4em;
            border-radius: 10px;
            margin-bottom: 45px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .settings-container h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 1.5em;
            font-size: 24px;
        }

        .settings-form {
            display: flex;
            flex-direction: column;
            gap: 0.75em;
        }

        .settings-form input {
            padding: 0.75em;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
        }

        .settings-form input[type="submit"] {
            background-color: #0077cc;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .settings-form input[type="submit"]:hover {
            background-color: #005fa3;
        }

        .settings-form button[type="button"].go-back-btn {
            background-color: #f5f5f5;
            color: #0077cc;
            border: 1px solid #0077cc;
            margin-top: 0.0em;
            font-weight: bold;
            padding: 0.75em; /* Add this line */
        }

        .settings-form button[type="button"].go-back-btn:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <img style="margin-bottom: 25px;" src="images/logo-transparent.png" alt="Marmora Hardware Logo" width="400" height="180" style="padding-top: 10px; margin-top: 40px;">
    <div class="settings-container">
        <h2 style="margin-top: -20px;">Edit Account Settings</h2>
        <form class="settings-form" action="update_account.php" method="post">
            <input type="text" name="first_name" placeholder="New First Name" required>
            <input type="text" name="last_name" placeholder="New Last Name" required>
            <input type="email" name="email" placeholder="New Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="password" name="password" placeholder="New Password">
            <input type="password" name="confirm_password" placeholder="Confirm New Password">
            <input type="submit" value="Update Settings">
            <button type="button" class="go-back-btn" onclick="window.location.href='account.php'">Go Back</button>
            </form>
            </div>
            
            </body>
            </html>

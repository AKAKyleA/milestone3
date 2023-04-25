<?php
// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Loop through each user and update their account level if it has changed
$update_successful = true;
foreach ($_POST as $key => $value) {
    if (strpos($key, 'account_level_') === 0) {
        $user_id = substr($key, strlen('account_level_'));
        $new_level = $value;

        // Determine the values of isEmployee, isManager, and isAdmin based on the new account level
        if ($new_level == 'employee') {
            $isEmployee = 1;
            $isManager = 0;
            $isAdmin = 0;

     
            // Update the user's account level in the database
        $sql = "UPDATE users SET isEmployee = $isEmployee, isManager = $isManager, isAdmin = $isAdmin WHERE id = $user_id";
        if (!$connection->query($sql)) {
            $update_successful = false;
        }


        } elseif ($new_level == 'manager') {
            $isEmployee = 1;
            $isManager = 1;
            $isAdmin = 0;

            // Update the user's account level in the database
        $sql = "UPDATE users SET isEmployee = $isEmployee, isManager = $isManager, isAdmin = $isAdmin WHERE id = $user_id";
        if (!$connection->query($sql)) {
            $update_successful = false;
        }


        } elseif ($new_level == 'admin') {
            $isEmployee = 1;
            $isManager = 1;
            $isAdmin = 1;

           // Update the user's account level in the database
        $sql = "UPDATE users SET isEmployee = $isEmployee, isManager = $isManager, isAdmin = $isAdmin WHERE id = $user_id";
        if (!$connection->query($sql)) {
            $update_successful = false;
        }

        } elseif ($new_level == 'customer') {
            $isEmployee = 0;
            $isManager = 0;
            $isAdmin = 0;

            // Update the user's account level in the database
        $sql = "UPDATE users SET isEmployee = $isEmployee, isManager = $isManager, isAdmin = $isAdmin WHERE id = $user_id";
        if (!$connection->query($sql)) {
            $update_successful = false;
        }

        } elseif ($new_level == 'same') {
            
        }

        
    }
}

// Close the database connection
$connection->close();

// Redirect back to the account page and display a pop-up message
if ($update_successful) {
    echo '<script>alert("Account level updated successfully."); window.location.href="account.php";</script>';
} else {
    echo '<script>alert("Error updating account level. Please try again later."); window.location.href="account.php";</script>';
}

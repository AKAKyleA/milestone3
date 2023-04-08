<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Prepare and validate the form data
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$new_password = trim($_POST['password']);
$confirm_new_password = trim($_POST['confirm_password']);

if (strlen($new_password) > 0 && $new_password !== $confirm_new_password) {
    header('Location: edit_settings.php?error=password_mismatch');
    exit();
}

// Update the user's information
$user_id = $_SESSION['id'];
$sql = "UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('sssi', $first_name, $last_name, $email, $user_id);
$stmt->execute();

// Update the user's password, if provided
if (strlen($new_password) > 0) {
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('si', $new_password, $user_id);
    $stmt->execute();
}

$stmt->close();
$connection->close();

// Set success message and log out
$message = 'Your account information has been updated. You are now logged out.';
if (isset($_GET['success']) && $_GET['success'] === 'password_updated') {
    $message = 'Your password has been updated. You are now logged out.';
}

session_destroy();

// Redirect to index.php with a success message
echo '<script>alert("' . $message . '"); window.location.href = "index.php";</script>';
exit();
?>

<?php

// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Get the employee ID
$employee_id = $_POST['employee'];

// List of days
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Iterate through each day and insert schedule data into the database
foreach ($days as $day) {
    $lower_day = strtolower($day);
    $start_time = isset($_POST[$lower_day . '_start']) ? $_POST[$lower_day . '_start'] : null;
    $end_time = isset($_POST[$lower_day . '_end']) ? $_POST[$lower_day . '_end'] : null;
    $is_day_off = isset($_POST[$lower_day . '_off']) ? 1 : 0;

    if ($is_day_off) {
        $start_time = null;
        $end_time = null;
    }

    $stmt = $connection->prepare("INSERT INTO schedules (user_id, day_of_week, start_time, end_time, is_day_off) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isssi", $employee_id, $day, $start_time, $end_time, $is_day_off);
    $stmt->execute();
}

$stmt->close();
$connection->close();

// Redirect to the account page
header("Location: account.php");
exit();

?>

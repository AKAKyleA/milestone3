<?php
// Start the session
session_start();

// Check if the user is logged in
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

// Fetch the list of employees
$sql = "SELECT id, firstname, lastname FROM users WHERE isEmployee = 1";
$result = $connection->query($sql);
if (!$result) {
    die('Error executing query: ' . $connection->error);
}

$employees = $result->fetch_all(MYSQLI_ASSOC);

// Check if an employee was selected
if (isset($_GET['employee'])) {
    $employeeId = $_GET['employee'];

    // Fetch the employee's schedule
    $sql = "SELECT day_of_week, start_time, end_time, is_day_off FROM schedules WHERE user_id = $employeeId";
    $result = $connection->query($sql);
    if (!$result) {
        die('Error executing query: ' . $connection->error);
    }

    $schedule = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Employee Schedule</h1>

<?php
// Check if an employee has been selected
if (isset($_GET['employee'])) {
    // Get the selected employee's ID
    $employee_id = $_GET['employee'];

    // Fetch the employee's name
    $sql = "SELECT firstname, lastname FROM users WHERE id = $employee_id";
    $result = $connection->query($sql);
    if (!$result) {
        die('Error executing query: ' . $connection->error);
    }

    $employee = $result->fetch_assoc();
    $employee_name = $employee['firstname'] . ' ' . $employee['lastname'];

    // Fetch the employee's schedule
    $sql = "SELECT day_of_week, start_time, end_time, is_day_off FROM schedules WHERE user_id = $employee_id";
    $result = $connection->query($sql);
    if (!$result) {
        die('Error executing query: ' . $connection->error);
    }

    if ($result->num_rows > 0) {
        // Display the schedule in a table
        echo '<p>Schedule for ' . $employee_name . ':</p>';
        echo '<table>';
        echo '<thead><tr><th>Day</th><th>Start Time</th><th>End Time</th></tr></thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
        echo '<td>' . $row['day_of_week'] . '</td>';
        echo '<td>' . ($row['is_day_off'] ? 'Off' : date('h:i A', strtotime($row['start_time']))) . '</td>';
        echo '<td>' . ($row['is_day_off'] ? 'Off' : date('h:i A', strtotime($row['end_time']))) . '</td>';
        echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        // If there are no schedule entries for the employee, display a message
        echo '<p>No schedule entries found for ' . $employee_name . '.</p>';
    }

    // Add a button to go back to the employee selection form
    echo '<button onclick="window.location.href=\'all_schedules.php\'">Select Another Employee</button>';
} else {
    // If no employee has been selected, display the employee selection form
    echo '<form action="all_schedules.php" method="get">';
    echo '<label for="employee">Select an employee:</label>';
    echo '<select name="employee" id="employee">';
    foreach ($employees as $employee) {
        echo '<option value="' . $employee['id'] . '">' . $employee['firstname'] . ' ' . $employee['lastname'] . '</option>';
    }
    echo '</select>';
    echo '<button type="submit">View Schedule</button>';
    echo '</form>';

    // Add a button to go back to the account page
    echo '<br>';
    echo '<button onclick="window.location.href=\'account.php\'">Go Back</button>';
}
?>

</div>
<body>
</html>
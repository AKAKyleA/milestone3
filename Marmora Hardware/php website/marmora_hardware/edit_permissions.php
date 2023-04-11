<?php
// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Fetch the user list
$sql = 'SELECT id, email, isEmployee, isManager, isAdmin FROM users';
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account Levels</title>
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

        select {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 5px;
            border-radius: 4px;
            font-size: 14px;
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
        <h1>Edit Account Levels</h1>

        <form action="save_changes.php" method="post">
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Email</th>
                    <th>Current Account Level</th>
                    <th>New Account Level</th>
                </tr>
                <?php
                // Loop through each row of the result set and output the user data
                while ($row = $result->fetch_assoc()) {
                    // Determine the current account level based on the values of isEmployee, isManager, and isAdmin
                    if ($row['isEmployee'] == 1 && $row['isManager'] == 0 && $row['isAdmin'] == 0) {
                        $current_level = 'Employee';
                    } elseif ($row['isEmployee'] == 0 && $row['isManager'] == 1 && $row['isAdmin'] == 0) {
                        $current_level = 'Manager';
                    } elseif ($row['isEmployee'] == 0 && $row['isManager'] == 0 && $row['isAdmin'] == 1) {
                        $current_level = 'Admin';
                    } else {
                        $current_level = 'Customer';
                    }

                    // Output the row with the user data and the account level dropdown menu
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $current_level . '</td>';
                    echo '<td>';
                    echo '<select name="account_level_' . $row['id'] . '">';
                    echo '<option value="customer">Customer</option>';
                    echo '<option value="employee">Employee</option>';
                    echo '<option value="manager">Manager</option>';
                    echo '<option value="admin">Admin</option>';
                    echo '</select>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <br>
            <button type="submit">Save Changes</button>
            <button type="button" onclick="window.location.href='account.php'">Go Back</button>
        </form>
    </div>
</body>
</html>

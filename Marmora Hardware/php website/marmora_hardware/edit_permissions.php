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

        <!-- Uncomment and modify the PHP code to fetch the user list from the database when the server is set up -->
        <!-- <?php
            // Connect to the database
            // $connection = new mysqli('localhost', 'username', 'password', 'database_name');

            // Check the connection
            // if ($connection->connect_error) {
            //     die('Connection failed: ' . $connection->connect_error);
            // }

            // Fetch the user list
            // $sql = 'SELECT user_id, username, account_level FROM users';
            // $result = $connection->query($sql);
        ?> -->

        <form action="save_changes.php" method="post">
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Current Account Level</th>
                    <th>New Account Level</th>
                </tr>
                <!-- Example user data, replace with PHP code when the server is set up -->
                <tr>
                    <td>1</td>
                    <td>user1</td>
                    <td>Customer</td>
                    <td>
                        <select name="account_level_1">
                            <option value="customer">Customer</option>
                            <option value="employee">Employee</option>
                            <option value="manager">Manager</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                    <tr>
                        <td>2</td>
                        <td>user2</td>
                        <td>Employee</td>
                        <td>
                            <select name="account_level_2">
                                <option value="customer">Customer</option>
                                <option value="employee">Employee</option>
                                <option value="manager">Manager</option>
                                <option value="admin">Admin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>user3</td>
                        <td>Manager</td>
                        <td>
                            <select name="account_level_3">
                                <option value="customer">Customer</option>
                                <option value="employee">Employee</option>
                                <option value="manager">Manager</option>
                                <option value="admin">Admin</option>
                            </select>
                        </td>
                    </tr>
                    <!-- Add more rows for users, fetched from the database -->
                </table>
                <br>
                <button type="submit">Save Changes</button>
                <button type="button" onclick="window.location.href='account.php'">Go Back</button>
            </form>
        </div>
    </body>
    </html>
    

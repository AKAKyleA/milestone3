<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
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
        <h1>Order History</h1>

        <!-- Uncomment and modify the PHP code to fetch the order history from the database when the server is set up -->
        <!-- <?php
            // Connect to the database
            // $connection = new mysqli('localhost', 'username', 'password', 'database_name');

            // Check the connection
            // if ($connection->connect_error) {
            //     die('Connection failed: ' . $connection->connect_error);
            // }

            // Fetch the user's order history
            // $sql = 'SELECT date, order_number, items, total_cost FROM orders WHERE user_id = 1';
            // $result = $connection->query($sql);
        ?> -->

        <table>
            <tr>
                <th>Date</th>
                <th>Order Number</th>
                <th>Item(s)</th>
                <th>Total Cost</th>
            </tr>
            <!-- Example order history data, replace with PHP code when the server is set up -->
            <tr>
                <td>2023-01-15</td>
                <td>12345</td>
                <td>Item A, Item B</td>
                <td>$35.00</td>
            </tr>
            <tr>
                <td>2023-02-20</td>
                <td>67890</td>
                <td>Item C</td>
                <td>$12.00</td>
            </tr>
        </table>
        <br>
        <button onclick="window.location.href='account.php'">Go Back</button>
    </div>
</body>
</html>

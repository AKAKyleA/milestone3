<?php
// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Fetch the sales data
$sql = 'SELECT date, total FROM sales ORDER BY date ASC';
$result = $connection->query($sql);

$total_sales = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Sales</title>
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
        <h1>View Sales</h1>

        <?php
            // Connect to the database
            $connection = new mysqli('localhost', 'root', '', 'hardstore');

            // Check the connection
            if ($connection->connect_error) {
                die('Connection failed: ' . $connection->connect_error);
            }

            // Fetch the user's order history
            
            $sql = "SELECT date, order_number, account_id, items, total FROM sales ";
            $result = $connection->query($sql);

            // Display the order history in the table
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Date</th>";
                echo "<th>Order Number</th>";
                echo "<th>Account ID</th>";
                echo "<th>Item(s)</th>";
                echo "<th>Total Cost</th>";
                echo "</tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['order_number'] . "</td>";
                    echo "<td>" . $row['account_id'] . "</td>";
                    echo "<td>" . $row['items'] . "</td>";
                    echo "<td>" . "$" . $row['total'] . "</td>";
                    echo "</tr>";
                    $total_sales += $row['total'];
                }
                echo "</table>";
            } else {
                echo "No order history found.";
            }
            

            
            // Close the connection
            $connection->close();
        ?>
            <h2>Total Sales: $<?php echo number_format($total_sales, 2); ?></h2>
        <br>
        <button onclick="window.location.href='account.php'">Go Back</button>
    </div>
</body>
</html>

<?php
// Close the database connection

?>



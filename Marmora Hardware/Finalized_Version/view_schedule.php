<?php
session_start();

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
        <p>Employee Name: <?php echo $_SESSION['firstname']; ?></p>
        <p>Employee ID: <?php echo $_SESSION['id']; ?></p>

        <?php
            // Connect to the database
            $connection = new mysqli('localhost', 'root', '', 'hardstore');

            // Check the connection
            if ($connection->connect_error) {
                die('Connection failed: ' . $connection->connect_error);
            }

            // Fetch the employee's schedule
            $user_id = $_SESSION['id'];
            
            $sql = "SELECT day_of_week, start_time, end_time, is_day_off FROM schedules WHERE user_id = ?";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
        ?>

        <table>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['day_of_week']; ?></td>
                    <td><?php echo $row['is_day_off'] ? 'Off' : date('h:i A', strtotime($row['start_time'])); ?></td>
                    <td><?php echo $row['is_day_off'] ? 'Off' : date('h:i A', strtotime($row['end_time'])); ?></td>
                    </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button onclick="window.location.href='account.php'">Go Back</button>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Schedule</title>
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

        label {
            font-size: 14px;
        }

        select, input[type="time"], input[type="submit"], button {
            font-size: 14px;
            padding: 1px;
            margin: 1px 0;
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

        input[type=submit], button {
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

        input[type=submit]:hover, button:hover {
            background-color: #2980b9;
        }
    </style>
    <script>
        function toggleOff(day) {
            const offCheckbox = document.getElementById(day + '_off');
            const startTimeInput = document.getElementById(day + '_start');
            const endTimeInput = document.getElementById(day + '_end');

            if (offCheckbox.checked) {
                startTimeInput.value = '';
                endTimeInput.value = '';
                startTimeInput.disabled = true;
                endTimeInput.disabled = true;
            } else {
                startTimeInput.disabled = false;
                endTimeInput.disabled = false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
    <h1>Create Employee Schedule</h1>
    <?php

        // Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

        // Fetch employees from the database
        $sql = "SELECT id, firstname, lastname FROM users WHERE isEmployee = 1 OR isAdmin = 1 OR isManager = 1";

        $result = $connection->query($sql);
        $employees = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }
        }
        $connection->close();
    ?>
    <form action="create_schedule.php" method="post">
        <label for="employee">Employee:</label>
        <select name="employee" id="employee">
            <?php
                foreach ($employees as $employee) {
                    echo '<option value="' . $employee['id'] . '">' . $employee['firstname'] . ' ' . $employee['lastname'] . '</option>';
                }
            ?>
        </select>
        <br><br>
    
        <table>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Day Off</th>
            </tr>
            <?php
                $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                foreach ($days as $day) {
                    $lower_day = strtolower($day);
                    echo '<tr>';
                    echo '<td>' . $day . '</td>';
                    echo '<td class="start-time"><input type="time" id="' . $lower_day . '_start" name="' . $lower_day . '_start" min="08:00" max="17:00" step="1800" required></td>';
                    echo '<td class="end-time"><input type="time" id="' . $lower_day . '_end" name="' . $lower_day . '_end" min="08:00" max="17:00" step="1800" required></td>';
                    echo '<td class="day-off"><input type="checkbox" id="' . $lower_day . '_off" name="' . $lower_day . '_off" onclick="toggleOff(\'' . $lower_day . '\')"><label for="' . $lower_day . '_off">Day Off</label></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <br>
        <input type="submit" value="Submit">
        <button type="button" onclick="window.location.href='account.php'">Go Back</button>
    </form>
    </div>
</body>
</html>
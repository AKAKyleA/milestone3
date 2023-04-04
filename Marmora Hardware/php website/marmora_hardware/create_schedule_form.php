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
    <form action="create_schedule.php" method="post">
        <label for="employee">Employee:</label>
        <select name="employee" id="employee">
            <option value="1">John Doe</option>
            <option value="2">Jane Smith</option>
        </select>
        <br><br>

        <table>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
            <!-- <?php
            $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            foreach ($days as $day) {
                echo '<tr>';
                echo '<td>' . $day . '</td>';
                echo '<td><input type="time" name="' . strtolower($day) . '_start" min="08:00" max="17:00" step="1800" required></td>';
                echo '<td><input type="time" name="' . strtolower($day) . '_end" min="08:00" max="17:00" step="1800" required></td>';
                echo '</tr>';
            }
            ?> -->
            <tr>
                <td>Sunday</td>
                <td class="start-time"><input type="time" id="sunday_start" name="sunday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="sunday_end" name="sunday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="sunday_off" name="sunday_off" onclick="toggleOff('sunday')">
                    <label for="sunday_off">Day Off</label>
                </td>
            </tr>
            
            <tr>
                <td>Monday</td>
                <td class="start-time"><input type="time" id="monday_start" name="monday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="monday_end" name="monday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="monday_off" name="monday_off" onclick="toggleOff('monday')">
                    <label for="monday_off">Day Off</label>
                </td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td class="start-time"><input type="time" id="tuesday_start" name="tuesday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="tuesday_end" name="tuesday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="tuesday_off" name="tuesday_off" onclick="toggleOff('tuesday')">
                    <label for="tuesday_off">Day Off</label>
                </td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td class="start-time"><input type="time" id="wednesday_start" name="wednesday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="wednesday_end" name="wednesday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="wednesday_off" name="wednesday_off" onclick="toggleOff('wednesday')">
                    <label for="wednesday_off">Day Off</label>
                </td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td class="start-time"><input type="time" id="thursday_start" name="thursday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="thursday_end" name="thursday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="thursday_off" name="thursday_off" onclick="toggleOff('thursday')">
                    <label for="thursday_off">Day Off</label>
                </td>
            </tr>

            <tr>
                <td>Friday</td>
                <td class="start-time"><input type="time" id="friday_start" name="friday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="friday_end" name="friday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="friday_off" name="friday_off" onclick="toggleOff('friday')">
                    <label for="friday_off">Day Off</label>
                </td>
            </tr>
            
            <tr>
                <td>Saturday</td>
                <td class="start-time"><input type="time" id="saturday_start" name="saturday_start" min="08:00" max="17:00" step="1800" required></td>
                <td class="end-time"><input type="time" id="saturday_end" name="saturday_end" min="08:00" max="17:00" step="1800" required></td>
                <td class="day-off">
                    <input type="checkbox" id="saturday_off" name="saturday_off" onclick="toggleOff('saturday')">
                    <label for="saturday_off">Day Off</label>
                </td>
            </tr>
            

            <!-- Add similar rows for other days of the week -->

        </table>
        <br>
        <input type="submit" value="Submit">
        <button type="button" onclick="window.location.href='account.html'">Go Back</button>
    </form>
</div>
</body>
</html>

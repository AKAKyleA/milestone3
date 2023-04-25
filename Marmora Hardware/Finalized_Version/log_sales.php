<?php
// Connect to the database
$connection = new mysqli('localhost', 'root', '', 'hardstore');

// Check the connection
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Check if sale has already been logged for the current date
$date = date('Y-m-d');
$sql = "SELECT COUNT(*) as count FROM sales WHERE date='$date'";
$result = $connection->query($sql);
$count = $result->fetch_assoc()['count'];

if ($count > 0) {
    echo '<script>alert("Error: Sales already logged for today."); window.location.href="account.php";</script>';
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = $_POST['end_of_day_total'];
    $date = date('Y-m-d');
    
    // Insert sales total for the current date into the sales table
    $sql = "INSERT INTO sales (date, total) VALUES ('$date', '$total')";
    if ($connection->query($sql)) {
        echo '<script>alert("Sales total logged successfully."); window.location.href="account.php";</script>';
    } else {
        echo '<script>alert("Error logging sales total. Please try again later."); window.location.href="account.php";</script>';
    }
}

// Close the database connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Sales</title>
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

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-sizing: border-box;
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
        <h1>Log Sales</h1>
        <p><?php echo date('F j, Y'); ?></p>
        <form method="POST">
            <label for="end_of_day_total">Enter End Of Day Total:</label>
            <input type="text" id="end_of_day_total" name="end_of_day_total" required>
            <br>
            <button type="submit">Submit</button>
            <button type="button" onclick="window.location.href='account.php'">Go Back</button>
        </form>
    </div>
</body>

<script>
    function displayDate() {
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById("todaysDate").innerHTML = today.toLocaleDateString('en-US', options);
    }
    
    // Call the displayDate function to update the date on page load
    displayDate();
</script>

</html>

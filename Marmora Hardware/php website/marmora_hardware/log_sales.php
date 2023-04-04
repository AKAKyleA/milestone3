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
    <body onload="displayDate()"></body>
    <div class="container">
        <h1>Log Sales</h1>
        <p id="todaysDate"></p>
        <p><?php echo date('F j, Y'); ?></p>
        <form>
            <label for="end_of_day_total">Enter End Of Day Total:</label>
            <input type="text" id="end_of_day_total" name="end_of_day_total" required>
            <br>
            <button type="submit">Submit</button>
            <button type="button" onclick="window.location.href='account.html'">Go Back</button>
        </form>
    </div>
</body>

<script>
    function displayDate() {
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById("todaysDate").innerHTML = today.toLocaleDateString('en-US', options);
    }
</script>

</html>

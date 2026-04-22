<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Temperature Converter</title>
    <style>
        body {
            background: #07c3db;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 40px;
            margin: 0;
        }

        .box {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 3px;
        }

        input {
            border: 1px solid #ccc;
        }

        button {
            background: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #1976D2;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Temperature Converter</h1>

    <form method="post">
        <input type="number" name="celsius" placeholder="Enter Celsius" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        $fahrenheit = celsiusToFahrenheit($celsius);

        echo "<h3>Result:</h3>";
        echo "<p>$celsius °C = " . number_format($fahrenheit, 1) . " °F</p>";
    }
    ?>
</div>

</body>
</html>
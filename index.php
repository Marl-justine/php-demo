<!DOCTYPE html>
<html>
<head>
    <title>PHP Labs</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ee7f17;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 60px 20px;
        }

        h1 {
            margin-bottom: 30px;
        }

        .nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .card {
            background: #ffffff;
            padding: 20px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            transition: 0.2s;
        }

        .card:hover {
            background: #f0f0f0;
            transform: translateY(-3px);
        }

        .card h2 {
            margin: 10px 0;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>PHP Laboratory Activities</h1>

    <div class="nav">

        <a href="lab1.php" class="card">
            <h2>Lab 1</h2>
            <p>Fruits Array with Form Input</p>
        </a>

        <a href="lab2.php" class="card">
            <h2>Lab 2</h2>
            <p>Temperature Converter</p>
        </a>

        <a href="lab3.php" class="card">
            <h2>Lab 3</h2>
            <p>ATM Machine Simulation</p>
        </a>

    </div>
</div>

</body>
</html>
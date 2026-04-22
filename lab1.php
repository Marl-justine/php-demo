<!DOCTYPE html>
<html>
<head>
    <title>Lab 1 - My Favorite Fruits</title>
    <style>
        body {
            background: #d413e6;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 40px;
            margin: 0;
        }

        .container {
            max-width: 500px;
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
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        ul {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>My Favorite Fruits</h1>

    <form method="post">
        <input type="text" name="fruit1" placeholder="Fruit 1" required>
        <input type="text" name="fruit2" placeholder="Fruit 2" required>
        <input type="text" name="fruit3" placeholder="Fruit 3" required>
        <input type="text" name="fruit4" placeholder="Fruit 4" required>
        <input type="text" name="fruit5" placeholder="Fruit 5" required>
        <button type="submit">Save Fruits</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fruits = [
            $_POST['fruit1'],
            $_POST['fruit2'],
            $_POST['fruit3'],
            $_POST['fruit4'],
            $_POST['fruit5']
        ];

        echo "<h3>Your Favorite Fruits:</h3><ul>";

        foreach ($fruits as $fruit) {
            echo "<li>" . strtoupper($fruit) . "</li>";
        }

        echo "</ul>";

        echo "<p><strong>My favorite fruit is: " . strtoupper($fruits[0]) . "</strong></p>";
    }
    ?>
</div>

</body>
</html>
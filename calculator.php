<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="gradient-border">
        <header>
            <h1>Simple Calculator</h1>
            <p>Enter two numbers and choose an operation.</p>
        </header>
        <main>
            <div class="container">
                <form action="" method="post">
                    <div class="num1 num">
                        <label for="number">Enter a number:</label>
                        <input type="number" name="num1" placeholder="Enter a number" required>
                    </div>
                    <br>
                    <div class="num2 num"></div>
                    <label for="number">Enter a number:</label>
                    <input type="number" name="num2" placeholder="Enter a number" required>
                    <br>
                    <button type="submit" name="calculate">Calculate</button>
                    <select name="operation" required>
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                </form>
        </main>
    </div>
    </div>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        if ($operation == 'add') {
            $result = $num1 + $num2;
        } elseif ($operation == 'subtract') {
            $result = $num1 - $num2;
        } elseif ($operation == 'multiply') {
            $result = $num1 * $num2;
        } elseif ($operation == 'divide') {
            if ($num2 == 0) {
                $result = "Error! Division by zero.";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            $result = "Invalid operation";
        }

        echo "<div class='hello'><h2>Result: $result</h2></div>";
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<h2>Please provide both numbers and select an operation.</h2>";
        }
    }
    ?>
</body>

</html>
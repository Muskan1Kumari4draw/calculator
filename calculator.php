<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="num1" placeholder="Enter a number" required>
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <label for="number">Enter a number:</label>
        <input type="number" name="num2" placeholder="Enter a number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

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

        echo "<h2>Result: $result</h2>";
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<h2>Please provide both numbers and select an operation.</h2>";
        }
    }
    ?>
</body>
</html>

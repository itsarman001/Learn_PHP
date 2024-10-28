<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math Functions</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>PHP Math Functions</h2>
        <form action="./math_functions.php" method="post">
            <div>
                <label for="a">Value of A: </label>
                <input type="text" name="a" placeholder="Enter Value" required>
            </div>
            <div>
                <label for="b">Value of B: </label>
                <input type="text" name="b" placeholder="Enter Value" required>
            </div>
            <input type="submit" value="Calculate">
        </form>
        <?php
        if (isset($_POST["a"]) && isset($_POST["b"])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            echo "<p>Absolute Value of A: " . abs($a) . "</p>";
            echo "<p>Rounded Value of A: " . round($a) . "</p>";
            echo "<p>Round Up Value of A: " . ceil($a) . "</p>";
            echo "<p>Round Down Value of A: " . floor($a) . "</p>";
            echo "<p>Square Root of A: " . sqrt($a) . "</p>";
            echo "<p>{$a} to the power of {$b}: " . pow($a, $b) . "</p>";
            echo "<p>Maximum Value Between {$a} and {$b}: " . max($a, $b) . "</p>";
            echo "<p>Minimum Value Between {$a} and {$b}: " . min($a, $b) . "</p>";
            echo "<p>Random Value Between {$a} and {$b}: " . rand($a, $b) . "</p>";
        }
        ?>
    </div>

    <div class="container">
        <h3>Assignment</h3>
        <form action="./math_functions.php" method="post">
            <label for="radius">Radius: </label>
            <input type="text" name="radius" placeholder="Enter Radius" required>
            <input type="submit" value="Calculate">
        </form>
        <?php
        if (isset($_POST["radius"])) {
            $radius = $_POST["radius"];
            $circumference = 2 * pi() * $radius;
            $area = pi() * pow($radius, 2);
            $volume = 4/3 * pi() * pow($radius, 3);
            echo "<p>Circumference: " . round($circumference, 2) . " cm</p>";
            echo "<p>Area: " . round($area, 2) . " cm<sup>2</sup></p>";
            echo "<p>Volume: " . round($volume, 2) . " cm<sup>3</sup></p>";
        }
        ?>
    </div>
</body>
</html>

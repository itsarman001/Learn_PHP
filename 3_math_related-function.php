<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Related Function</title>
</head>

<body>
    <h2>Math Related Functions</h2>
    <form action="./math_related-function.php" method="post">
        <div>
            <label for="a">Value of A: </label>
            <input type="text" name="a" placeholder="Enter Value">
        </div>
        <div>
            <label for="a">Value of B: </label>
            <input type="text" name="b" placeholder="Enter value">
        </div>
        <input type="submit" value="Calculate">
    </form>

    <?php
    $a = $_POST["a"];
    $b = $_POST["b"];

    // Return Absolute Value
    $result = abs($a);
    echo "Absolute Value of A: {$result} <br>";

    // Return Round Value
    $result = round($a);
    echo "Rounded Value of A: {$result} <br>";

    // Return Round up Value
    $result = ceil($a);
    echo "Round Up Value of A: {$result} <br>";

    // Return Round Down Value
    $result = floor($a);
    echo "Round Down Value of A: {$result} <br>";

    // Return Square root
    $result = sqrt($a);
    echo "Square root of A: {$result} <br>";

    // Return Powered Value
    $result = pow($a, $b);
    echo "{$a} to the power {$b}: {$result} <br>";

    // Return Max Value
    $result = max($a, $b);
    echo "Maximum Value Between {$a} and {$b}: {$result} <br>";

    // Return Min Value
    $result = min($a, $b);
    echo "Minimum Value Between {$a} and {$b}: {$result} <br>";

    // Return Random Value
    $result = rand($a, $b);
    echo "Random Value Between {$a} and {$b}: {$result} <br>";
    ?>

    <div>
        <h3>Assignment</h3>
        <form action="./math_related-function.php" method="post">

            <label for="radius">Radius: </label>
            <input type="text" name="radius" placeholder="Enter radius">
            <input type="submit" value="Calculate">

        </form>
        <?php
        $radius = $_POST["radius"];

        $circumference = 2 * pi() * $radius;
        $area = pi() * pow($radius, 2);
        $volume = 4/3 * pi() * pow($radius, 3);

        $circumference = round($circumference, 2);
        $area = round($area, 2);
        $volume = round($volume, 2);
        
        echo "Circumference: {$circumference} cm <br>";
        echo "Area: {$area} cm^2 <br>";
        echo "Area: {$volume} cm^3 <br>";
        ?>
    </div>

</body>

</html>
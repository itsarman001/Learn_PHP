<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>Insert a New Element in an Array</h2>
        <?php

        $arr = array(1, 2, 3, 4, 5, 6);
        echo "Initial Array: ";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ($i < count($arr) - 1 ? ", " : "");
        }

        echo "<br>";

        $newElement = 22;
        $position = 3;

        if ($position > 0 && $position < count($arr)) {

            array_splice($arr, $position, 0, $newElement);
        }

        echo "Current Array: ";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ($i < count($arr) - 1 ? ", " : "");
        }
        ?>
    </div>

    <div class="container">
        <h2>Remove Duplicates from an array</h2>

        <?php
        $arr = array(5, 1, 2, 3, 3, 4, 4, 5, 5, 6);

        echo "<h3>Orignal Array</h3>";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ", ";
        }

        echo "<h3>After Removing Duplicates Array</h3>";

        $arr = array_unique($arr);
        foreach ($arr as $items) {
            echo $items . " ";
        }
        ?>
    </div>

    <div class="container">
        <h2>Min and Max value from an array</h2>

        <?php
        $arr = array(5, 1, 2, 3, 3, 4, 4, 5, 5, 6);
        echo "<h3>Min Value</h3>";
        echo min($arr);
        echo "<h3>Max Value</h3>";
        echo max($arr);

        ?>
    </div>

    <div class="container">
        <h2>Sort an array</h2>

        <?php
        echo "<h3>Unsorted Array</h3>";
        $arr = array("Mango", "Banana", "Apple", "Pineapple");
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ", ";
        }
        echo "<br>";

        echo "<h3>Unsorted Array</h3>";
        sort($arr);
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ", ";
        }

        ?>
    </div>

    <div class="container">
        <h2>Calculate the average of an array of temperatures (minimum length of 15)</h2>

        <?php
        echo "<h3>Array of temperatures</h3>";


        $temperatures = [];
        for ($i = 0; $i < 15; $i++) {
            $temperatures[] = mt_rand(-100, 400) / 10;
        }


        foreach ($temperatures as $temp) {
            echo $temp . ", ";
        }

        echo "<br>";


        $average = array_sum($temperatures) / count($temperatures);
        echo "Average of the array: " . round($average, 2);


        sort($temperatures);
        $smallest = array_slice($temperatures, 0, 5);
        $largest = array_slice($temperatures, -5);

        echo "<br><br>5 Smallest Temperatures: " . implode(", ", $smallest);
        echo "<br>5 Largest Temperatures: " . implode(", ", $largest);
        ?>

    </div>



</body>

</html>
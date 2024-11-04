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


</body>

</html>
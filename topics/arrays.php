<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays | PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Array in PHP</h2>

    <div class="container">
        <?php
            // Initialize an array
            $fruits = array("Apple", "Mango", "Banana", "Apple",);

            // Add a new fruit
            array_push($fruits, "Pineapple");

            // array_pop($fruits);
            // array_shift($fruits);

            print_r($fruits);

            // Remove a fruit
            array_splice($fruits, 1, 1); // Removes "Mango"

            // Count the number of fruits
            $fruitCount = count($fruits);
            echo "Total fruits: {$fruitCount} <br>";

            // Accessing the first fruit
            echo "Accessing {$fruits[0]} <br>";

            // Display all fruits
            echo "Fruits: ";
            foreach($fruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Sort the array
            sort($fruits);
            echo "Sorted Fruits: ";
            foreach($fruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Check if a specific fruit exists
            $searchFruit = "Banana";
            if (in_array($searchFruit, $fruits)) {
                echo "{$searchFruit} is in the array.<br>";
            } else {
                echo "{$searchFruit} is not in the array.<br>";
            }

            // Get the keys of the array
            $keys = array_keys($fruits);
            echo "Keys of the fruits array: ";
            foreach ($keys as $key) {
                echo "{$key}, ";
            }
            echo "<br>";

            // Reverse the array
            $reversedFruits = array_reverse($fruits);
            echo "Reversed Fruits: ";
            foreach($reversedFruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Merge with another array
            $moreFruits = array("Orange", "Grapes");
            $allFruits = array_merge($fruits, $moreFruits);
            echo "All Fruits after merging: ";
            foreach($allFruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Unique values
            $duplicateFruits = array("Apple", "Banana", "Apple", "Orange");
            $uniqueFruits = array_unique($duplicateFruits);
            echo "Unique Fruits: ";
            foreach($uniqueFruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Map function
            $uppercasedFruits = array_map('strtoupper', $fruits);
            echo "Uppercased Fruits: ";
            foreach($uppercasedFruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";

            // Filter function
            $filteredFruits = array_filter($fruits, function($fruit) {
                return strlen($fruit) > 5; // Only fruits with names longer than 5 characters
            });
            echo "Filtered Fruits (length > 5): ";
            foreach($filteredFruits as $fruit) {
                echo "{$fruit}, ";
            }
            echo "<br>";
        ?>
    </div>
</body>
</html>

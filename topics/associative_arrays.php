<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays | PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Associative Arrays | PHP</h2>

    <div class="container">
        <?php
            // Initialize an associative array
            $capitals = array(
                "West Bengal" => "Kolkata",
                "Maharashtra" => "Mumbai",
                "Bihar" => "Patna"
            );

            // 1. Display all key-value pairs
            echo "<strong>1. Display all key-value pairs:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 2. Adding a new key-value pair
            $capitals["Tamil Nadu"] = "Chennai";
            echo "<br><strong>2. After adding Tamil Nadu:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 3. Checking if a key exists
            $keyToCheck = "Maharashtra";
            if (array_key_exists($keyToCheck, $capitals)) {
                echo "<br><strong>3. Key exists:</strong> {$keyToCheck} exists in the array.<br>";
            }

            // 4. Getting keys and values
            $keys = array_keys($capitals);
            $values = array_values($capitals);
            echo "<br><strong>4. Keys:</strong> " . implode(", ", $keys) . "<br>";
            echo "<strong>Values:</strong> " . implode(", ", $values) . "<br>";

            // 5. Removing a key-value pair
            unset($capitals["Bihar"]);
            echo "<br><strong>5. After removing Bihar:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 6. Merging arrays
            $moreCapitals = array("Kerala" => "Thiruvananthapuram", "Punjab" => "Chandigarh");
            $capitals = array_merge($capitals, $moreCapitals);
            echo "<br><strong>6. After merging with more capitals:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 7. Sorting the array by values
            asort($capitals);
            echo "<br><strong>7. Sorted capitals by values:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 8. Sorting the array by keys
            ksort($capitals);
            echo "<br><strong>8. Sorted capitals by keys:</strong><br>";
            foreach ($capitals as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 9. Counting elements in the array
            $count = count($capitals);
            echo "<br><strong>9. Count of capitals:</strong> There are {$count} capitals in the array.<br>";

            // 10. Flipping keys and values
            $flipped = array_flip($capitals);
            echo "<br><strong>10. Flipped array (keys and values swapped):</strong><br>";
            foreach ($flipped as $key => $value) {
                echo "{$value} is the state of {$key}, <br>";
            }

            // 11. Filtering an array
            $filtered = array_filter($capitals, function($value) {
                return strpos($value, 'a') !== false; // Keep capitals containing 'a'
            });
            echo "<br><strong>11. Filtered capitals (contain 'a'):</strong><br>";
            foreach ($filtered as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 12. Mapping an array
            $mapped = array_map(function($value) {
                return strtoupper($value); // Convert all capital names to uppercase
            }, $capitals);
            echo "<br><strong>12. Mapped capitals (uppercase):</strong><br>";
            foreach ($mapped as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 13. Combining two arrays
            $states = array("West Bengal", "Maharashtra", "Tamil Nadu");
            $combined = array_combine($states, array_values($capitals));
            echo "<br><strong>13. Combined states and capitals:</strong><br>";
            foreach ($combined as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 14. Slicing an array
            $sliced = array_slice($capitals, 0, 2); // Get first 2 elements
            echo "<br><strong>14. Sliced capitals:</strong><br>";
            foreach ($sliced as $key => $value) {
                echo "{$value} is the capital of {$key}, <br>";
            }

            // 15. Checking if a value exists
            if (in_array("Mumbai", $capitals)) {
                echo "<br><strong>15. Value exists:</strong> Mumbai is in the array.<br>";
            }

        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation in PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>PHP String Methods</h2>

        <?php
        // Initial string
        $string = "Hello, World!";
        echo "<strong>Initial String:</strong> " . $string . "<br><br>";

        // 1. Replace part of the string
        $new_string = str_replace("World", "Hehe", $string);
        echo "<strong>Replaced String:</strong> " . $new_string . "<br><br>";

        // 2. Convert string to lowercase
        $username = "Bro Code";
        $username_lower = strtolower($username);
        echo "<strong>Lowercase String:</strong> " . $username_lower . "<br><br>";

        // 3. Convert string to uppercase
        $username_upper = strtoupper($username);
        echo "<strong>Uppercase String:</strong> " . $username_upper . "<br><br>";

        // 4. Trim whitespace from the string
        $username_trimmed = "  " . $username . "  ";
        $username_trimmed = trim($username_trimmed);
        echo "<strong>Trimmed String:</strong> " . $username_trimmed . "<br><br>";

        // 5. Pad the string to a certain length
        $username_padded = str_pad($username, 20, "0");
        echo "<strong>Padded String (20 characters):</strong> " . $username_padded . "<br><br>";

        // 6. Remove hyphens from phone number
        $phone = "123-456-7890";
        $phone_cleaned = str_replace("-", "", $phone);
        echo "<strong>Cleaned Phone Number:</strong> " . $phone_cleaned . "<br><br>";

        // 7. Reverse the string
        $username_reversed = strrev($username);
        echo "<strong>Reversed String:</strong> " . $username_reversed . "<br><br>";

        // 8. Shuffle the string
        $username_shuffled = str_shuffle($username);
        echo "<strong>Shuffled String:</strong> " . $username_shuffled . "<br><br>";

        // 9. Compare two strings
        $compare_result = strcmp($username, "Bro Code");
        echo "<strong>String Comparison (strcmp):</strong> " . ($compare_result == 0 ? "Equal" : "Not Equal") . "<br><br>";

        // 10. Get the length of the string
        $phone_length = strlen($phone);
        echo "<strong>Phone Number Length:</strong> " . $phone_length . "<br><br>";

        // 11. Find the position of a character in the string
        $index_of_dash = strpos($phone, "-");
        echo "<strong>Position of Dash in Phone Number:</strong> " . $index_of_dash . "<br><br>";

        // 12. Extract part of the string
        $firstname = substr($username, 0, 3);
        $lastname = substr($username, 4);
        echo "<strong>First Name (3 chars):</strong> " . $firstname . "<br>";
        echo "<strong>Last Name (rest of string):</strong> " . $lastname . "<br><br>";

        // 13. Split string into array
        $fullname = explode(" ", $username);
        echo "<strong>Exploded Full Name:</strong> ";
        print_r($fullname);
        echo "<br><br>";

        // 14. Join array elements into a string
        $username_imploded = implode("-", $fullname);
        echo "<strong>Imploded Full Name with Dash:</strong> " . $username_imploded . "<br><br>";

        ?>

    </div>
</body>

</html>

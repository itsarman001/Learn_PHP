<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>String PHP</h2>
        <?php
        $string = "Hello, World!";
        echo "Initial String: " . $string;
        # replace a part of a string with another text.
        echo "<br>";
        $new_string = str_replace("World", "Hehe", $string);
        echo "New String: ". $new_string;
        ?>
    </div>
</body>

</html>
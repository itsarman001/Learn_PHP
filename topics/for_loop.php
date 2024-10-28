<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>For Loop</h2>
        <form action="./for_loop.php" method="post">
            <label>Enter a number to count to:</label>
            <input type="text" name="counter" min="1" max="20">
            <input type="submit" value="start">
        </form>
        <?php
        $counter = $_POST["counter"];

        for ($i = 1; $i <= $counter; $i++) {
            echo "{$i}, ";
        };
        ?>
    </div>

</body>

</html>
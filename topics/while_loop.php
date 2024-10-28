<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>While Loop</h2>
        <form action="./while_loop.php" method="post">
            <label>Enter a number to count to:</label>
            <input type="number" name="counter" min="1" max="20" required>
            <input type="submit" value="Start">
        </form>
        <?php
        if (isset($_POST["counter"])) {
            $counter = $_POST["counter"];
            $i = 1;
            echo "<h3>Counting to $counter:</h3>";
            while ($i <= $counter) {
                echo "<p>$i</p>";
                $i++;
            }
        }
        ?>
    </div>
</body>

</html>
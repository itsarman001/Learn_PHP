<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>Checkboxes</h2>
        <form action="./checkboxes.php" method="POST">
            <input type="checkbox" name="foods[]" value="Noodles"> <span>Noodles</span><br>
            <input type="checkbox" name="foods[]" value="Pizza"> <span>Pizza</span><br>
            <input type="checkbox" name="foods[]" value="Burger"> <span>Burger</span><br>
            <input type="submit" name="add_to_cart" value="Add To Cart">
        </form>
        <?php
            if (isset($_POST["add_to_cart"])) {
                if (isset($_POST["foods"])) {
                    $foods = $_POST["foods"];
                    foreach ($foods as $food) {
                        echo "You selected {$food} <br>";
                    };
                };
            };
        ?>
    </div>
</body>

</html>
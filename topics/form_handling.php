<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <form action="./form.php" method="GET">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <input type="submit" value="Login">
        </form>
        <div class="message">
            <?php

            $username = $_GET["username"];
            $password = $_GET["password"];
            echo "Your Username is {$username} and Password is {$password}";

            ?>
        </div>
    </div>

    <div class="container">
        <h2>Order Fast Food</h2>
        <form action="./form_handling.php" method="POST">
            <div>
                <label for="food-item">Select Food Item</label>
                <select name="food-item" required>
                    <option value="">--Select--</option>
                    <option value="pizza">Pizza</option>
                    <option value="burger">Burger</option>
                    <option value="fries">Fries</option>
                    <option value="salad">Salad</option>
                </select>
            </div>
            <div>
                <label for="food-size">Select Food Size</label>
                <select name="food-size" required>
                    <option value="">--Select--</option>
                    <option value="sm">Small</option>
                    <option value="md">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
            <div>
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" placeholder="Enter Quantity" required>
            </div>
            <input type="submit" value="Order">
        </form>
        <div class="message">
            <?php

            $foodItem = $_POST["food-item"];
            $quantity = $_POST["quantity"];
            $size = $_POST["food-size"];
            if ($size == "sm") {
                $price = 10;
            } else if ($size == "md") {
                $price = 15;
            } else {
                $size = 25;
            };

            $total = $price * $quantity;
            echo "You ordered {$quantity}, {$foodItem}(s) your Total is \${$total} Dollars";
            ?>
        </div>
    </div>
</body>

</html>
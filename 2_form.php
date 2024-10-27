<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: start;
            align-items: center;
            flex-direction: column;
            /* Align items vertically */
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 10px;
            /* Add margin to separate forms */
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            color: #d9534f;
            font-size: 14px;
        }
    </style>
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
        <form action="./form.php" method="POST">
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
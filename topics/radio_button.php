<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Radio Buttons</h2>
    <div class="container">
    <form action="./radio_button.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    </div>

    <div class="container">
        <?php
            if (isset($_POST["confirm"])) {
                $credit_card = null;
                if(isset($_POST["credit_card"])) {
                    $credit_card = $_POST["credit_card"];
                    echo "You selected {$credit_card}";
                } else {
                    echo "Please Select a Credit Card";
                };
            };
        ?>
    </div>
</body>
</html>
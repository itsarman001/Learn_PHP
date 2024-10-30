<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset and Empty</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h2>Isset and Empty</h2>
    <div class="container">
        <form action="./isset_empty.php" method="post">
            <label>username: </label>
            <input type="text" name="username"><br>
            <label>password: </label>
            <input type="password" name="password"><br>
            <input type="submit" name="login" value="Log in"><br>
        </form>
    </div>
    <div class="container">
        <?php
        // isset() = Returns TRUE if a variable is declared and not null
        // empty() = Returns TRUE if a variable is not declared, false, null, ""

        if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];

            if (empty($username)) {
                echo "Username is missing";
            } elseif (empty($password)) {
                echo "Password is missing";
            } else {
                echo "Hello {$username}";
            }
        }
        ?>

    </div>
</body>

</html>
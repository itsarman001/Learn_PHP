<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h2>Cookies in PHP</h2>
        <form action="./cookie.php" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name">
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" placeholder="Username" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" placeholder="Password" name="password">
            </div>
            <input type="submit" name="login" value="Login">

        </form>

        <br>


        <form action="./cookie.php" method="POST">
            <button type="submit" name="handle_button" value="delete_cookie">Delete Cookie</button>
            <button type="submit" name="handle_button" value="refresh_page">Refresh</button>
        </form>

    </div>

    <div class="container">
        <?php
        // $username = null;
        // $name = null;


        if (isset($_COOKIE["username"]) && isset($_COOKIE["name"])) {
            echo "Hi {$_COOKIE["name"]}, Your Username is {$_COOKIE["username"]}";
        } else {
            echo "<h3>No User Found</h3>";
        }


        if (isset($_POST["login"])) {



            if (empty($_POST["username"]) || empty($_POST["name"]) || empty($_POST["password"])) {
                echo "<h3>All fields are mandatory</h3>";
            } else {

                $username = $_POST["username"];
                $name = $_POST["name"];
                $password = $_POST["password"];

                setcookie("name", $name, time() + 3600, "/");
                setcookie("username", $username, time() + 3600, "/");


                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }
        }

        if (isset($_POST["handle_button"])) {

            $action = $_POST["handle_button"];

            if ($action == "delete_cookie") {
                setcookie("username", "", time() - 3600, "/");
                setcookie("name", "", time() - 3600, "/");
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } elseif ($action == "refresh_page") {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }
        }
        ?>
    </div>
</body>

</html>
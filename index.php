<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>

    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        h1 {
            text-decoration: underline;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>PHP</h1>
    <?php
    echo "This is a echo statement we use it to render data to to user <br>";

    // This is a singe line comment
    /* This
    ia a
    multiline
    comment */
    ?>

    <section>
        <h2>Variables</h2>
        <?php
        $name = "user";
        $age = 22;
        $balance = 2200.50;
        $boo = true;

        echo "Hi, I am {$name}. I am {$age}, i have \${$balance} rupees left in my account is it {$boo}"
        ?>
        <br>


        ?>

    </section>

    <section>
        <h2>Operators</h2>
        <?php

        // Arthmetic Operators
        $a = 2;
        $b = 4;
        $result;
        echo "a = {$a} and b = {$b} <br>";
        // echo $result = $a + $b;
        // echo $result = $a - $b;
        // echo $result = $a / $b;
        // echo $result = $a * $b;
        // echo $result = $a ** $b;
        // echo $result = $a % $b;

        echo "<br>";
        // Increament and Decreament 
        $counter = 0;

        $counter++;
        $counter--;
        $counter += 2;
        $counter -= 2;

        echo "Count is: {$counter}";
        echo "<br>";
        // Operator Precendence

        // () , **, * or %, + or -

        $total = 1 + 2 - 3 * 4 % 5 ** 6 + (7 - 8);

        echo $total;

        ?>

    </section>

    <section>
        <h2>If Else</h2>
        
    </section>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions in PHP</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="container">
    <h2>Functions in PHP</h2>

    <h3>Check if a number is even or odd</h3>
    <form action="" method="POST">
      <label for="num">Enter number:</label>
      <input type="number" name="num" id="num">
      <br>
      <input type="submit" value="Check" name="checkEven">
    </form>

    <h3>Find Hypotenuse of a triangle</h3>
    <form action="" method="POST">
      <label for="sida_1">Enter 1st side</label>
      <input type="number" name="side_1" id="side_1">
      <br>
      <label for="sida_2">Enter 2nd side</label>
      <input type="number" name="side_2" id="side_2">
      <br>
      <input type="submit" value="Get Hypotenuse" name="hypotenuse">
    </form>

    <?php
    function isEven(int $num)
    {
      return $num % 2 == 0 ? "{$num} is an even number" : "{$num} is an odd number";
    }

    function getHypotenuse(int $side_1, int $side_2)
    {
      // Calculate the hypotenuse
      $hypotenuse = sqrt($side_1 ** 2 + $side_2 ** 2);
      return "Hypotenuse of the triangle is " . $hypotenuse;
    }

    if (isset($_POST['checkEven'])) {
      $num = $_POST['num'];
      echo !empty($num) ? isEven((int)$num) : "Please enter a number.";
    }

    if (isset($_POST['hypotenuse'])) {
      $side_1 = $_POST['side_1'];
      $side_2 = $_POST['side_2'];
      echo !empty($side_1) && !empty($side_2) ? getHypotenuse($side_1, $side_2) : "Please add both sides";
    }
    ?>
  </div>
</body>

</html>

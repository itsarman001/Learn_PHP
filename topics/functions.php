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
    <?php
    function isEven(int $num) {
      return $num % 2 == 0 ? "{$num} is an even number" : "{$num} is an odd number";
    }

    if (isset($_POST['checkEven'])) {
      $num = $_POST['num'];
      echo !empty($num) ? isEven((int)$num) : "Please enter a number.";
    }
    ?>
  </div>
</body>
</html>

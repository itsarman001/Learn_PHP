<?php
echo "<h2>Operators</h2> <br>";

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
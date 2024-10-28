<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Switch Case</h2>
<?php
$date = date("l");

switch($date){
    case "Monday":
        echo "I hate Mondays";
        break;
    case "Tuesday":
        echo "It is Taco Tuesday!";
        break;
    case "Wednesday":
        echo "The work week is half over!";
        break;
    case "Thursday":
        echo "It's almost the weekend!";
        break;
    case "Friday":
        echo "The weekend is here!";
        break;
    case "Saturday":
        echo "Time to party!";
        break;
    case "Sunday":
        echo "Time to relax";
        break;
    default:
        echo "{$date} is not a day";
}
?>
</body>
</html>
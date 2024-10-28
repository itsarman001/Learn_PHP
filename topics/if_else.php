<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Conditionals and If Else</h2>

    <!-- Weekly Pay Form -->
    <div class="form-section">
        <form action="./if_else.php" method="post">
            <div>
                <label for="weekly_hours">Weekly Hours: </label>
                <input type="number" name="weekly_hours" placeholder="Enter Value" required>
            </div>
            <input type="submit" value="Get Amount">
        </form>
        <?php
        if (isset($_POST["weekly_hours"])) {
            $weekly_hours = $_POST["weekly_hours"];
            $weekly_pay = 0;
            $rate = 20;
            $overtime_rate = $rate * 1.5;
            $regular_hours = 40;

            if ($weekly_hours < 0) {
                echo "Please enter a valid value.";
            } else {
                if ($weekly_hours > $regular_hours) {
                    $regular_pay = $regular_hours * $rate;
                    $overtime_hours = $weekly_hours - $regular_hours;
                    $overtime_pay = $overtime_hours * $overtime_rate;
                    $weekly_pay = $regular_pay + $overtime_pay;
                } else {
                    $weekly_pay = $weekly_hours * $rate;
                }
                echo "Weekly Pay: $" . number_format($weekly_pay, 2);
            }
        }
        ?>
    </div>

    <!-- Citizenship and Age Form -->
    <div class="form-section">
        <form action="./if_else.php" method="post">
            <div>
                <label for="citizen">Are you a Citizen</label>
                <select name="citizen" required>
                    <option value="" disabled selected>--Select--</option>
                    <option value="true">Yes</option>
                    <option value="false">No</option>
                </select>
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" placeholder="Enter Age" required>
            </div>
            <div>
                <input type="submit" value="Check">
            </div>
        </form>
        <?php
        if (isset($_POST["citizen"]) && isset($_POST["age"])) {
            $age = $_POST["age"];
            $isCitizen = filter_var($_POST["citizen"], FILTER_VALIDATE_BOOLEAN);

            if ($age >= 18 && $isCitizen) {
                echo "Yes, you can vote.";
            } elseif ($isCitizen) {
                echo "You must be a state citizen to vote.";
            } elseif ($age < 18 || !$isCitizen) {
                echo "You must be 18 to vote.";
            }
            echo "<br>";
            // Example of using OR operator
            if ($age < 18 || !$isCitizen) {
                echo "You must be either 18 or a citizen to qualify.";
            }
        }
        ?>
    </div>

</body>
</html>

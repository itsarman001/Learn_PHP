<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Topics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>PHP Topics</h2>
        <table>
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Topic</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $topics = [
                    ["Variables", "./topics/variables.php"],
                    ["Form Handling", "./topics/form_handling.php"],
                    ["Operators", "./topics/operators.php"],
                    ["Math Functions", "./topics/math_functions.php"],
                    ["If Else Statements", "./topics/if_else.php"],
                    ["Switch Case", "./topics/switch_case.php"],
                    ["For Loop", "./topics/for_loop.php"],
                    ["While Loop", "./topics/while_loop.php"],
                    ["Arrays", "./topics/arrays.php"],
                    ["Arrays Tasks", "./topics/array_tasks.php"],
                    ["Associative Arrays", "./topics/associative_arrays.php"],
                    ["String", "./topics/string.php"],
                    ["Isset and Empty", "./topics/isset_empty.php"],
                    ["Radio Button", "./topics/radio_button.php"],
                    ["Checkboxes", "./topics/checkboxes.php"],
                    ["Cookies", "./topics/cookie.php"],
                    ["Functions", "./topics/functions.php"]
                ];

                foreach ($topics as $index => $topic) {
                    echo "<tr>";
                    echo "<td>" . ($index + 1) . "</td>";
                    echo "<td><h4>" . $topic[0] . "</h4></td>";
                    echo "<td><a href='" . $topic[1] . "'>Open</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

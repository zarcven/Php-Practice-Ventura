<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Input the sides of the Triangle</h2>
    <form method="post">
        <input type="number" name="side1" placeholder="Enter Side 1" required><br>
        <input type="number" name="side2" placeholder="Enter Side 2" required><br>
        <input type="number" name="side3" placeholder="Enter Side 3" required><br>
        <button type="submit">Calculate Area</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $A = $_POST["side1"];
        $B = $_POST["side2"];
        $C = $_POST["side3"];
        /* this is to check if its a valid triangle because for it to 
        be a triangle the sum of two sides should not be greater than the 3rd side*/ 
        if ($A + $B > $C && $A + $C > $B && $B + $C > $A) {
            // to calculate the semi-perimeter
            $S = ($A + $B+ $C) /2;

            $areasquared = $S * ($S - $A) * ($S - $B) * ($S - $C);


        }
    }
    ?>
</body>
</html>
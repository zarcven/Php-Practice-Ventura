<?php
/*
// Poorly organized and hard-to-read code

//Calculet the total price of times in a shopping cart
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$total = 0;
foreach($items as $item) {
    $toal += $item['price'];
}

echo "Total Price: $". $total;

//Perform a series of string manipulations

$string = "This is a poorly written program with little structure and readability"

// Remove spaces and convert to lowercase
$string = str_replace(' ', '', $string);
$string = strtolower($string);

// Display the modified
echo "\nModified string:". $string;

// Check if a number is even or odd
$number = 42;

if ($number % 2 == 0) {
    echo "\nThe Number ". $number. " is even";
    else{
        echo "\nThe Number ". $number. " is odd";
    }
}
*/

/**
 * @param array 
 * @return float 
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total Price: $". number_format($totalPrice, 2). "\n";

/**
 * @param string 
 * @return string 
 */
function formatString(string $input): string {
    $input = str_replace(' ', '', $input);
    return strtolower($input);
}


$string = "This is a poorly written program with little structure and readability";
$modifiedString = formatString($string);
echo "Modified string: " . $modifiedString . "\n";

/**
 * @param int 
 * @return string 
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 === 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}


$number = 42;
echo checkEvenOrOdd($number) . "\n";

?>
<?php

// 1. Check if the specified year is a leap year
$year = 2013; // Sample Input
if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "$year is a leap year\n";
} else {
    echo "$year is not a leap year\n";
}

// 2. Check the season based on the inserted temperature
$temperature = 27; // Sample Input
if ($temperature < 20) {
    echo "It is wintertime!\n";
} else {
    echo "It is summertime!\n";
}

// 3. Calculate the sum of two integers, triple it if they are the same
$firstInteger = 2;
$secondInteger = 2;
$sum = $firstInteger + $secondInteger;
if ($firstInteger == $secondInteger) {
    $sum *= 3;
    echo "($firstInteger + $secondInteger) * 3 = $sum\n";
} else {
    echo "It is summertime!\n";
}

// 4. Check if the sum of two given numbers equals 30
$firstInteger = 10;
$secondInteger = 10;
$sum = $firstInteger + $secondInteger;
if ($sum == 30) {
    echo "true\n";
} else {
    echo "false\n";
}

// 5. Check if the given positive number is a multiple of 3
$number = 20; // Sample Input
if ($number % 3 == 0 && $number > 0) {
    echo "true\n";
} else {
    echo "false\n";
}

// 6. Check if the integer value is in the range of [20-50] inclusive
$number = 50; // Sample Input
if ($number >= 20 && $number <= 50) {
    echo "true\n";
} else {
    echo "false\n";
}

// 7. Find the largest number between three integers
$numbers = [1, 5, 9]; // Sample Input
$maxNumber = max($numbers);
echo "$maxNumber\n";

// 8. Calculate the monthly electricity bill
$units = 300; // Sample Input
$bill = 0;
if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = 50 * 2.50 + ($units - 50) * 5.00;
} elseif ($units <= 250) {
    $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
} else {
    $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
}
echo "Monthly electricity bill: $bill JOD\n";

// 9. Calculator with four main operations
function calculator($a, $b, $operation) {
    switch ($operation) {
        case 'addition':
            return $a + $b;
        case 'subtraction':
            return $a - $b;
        case 'multiplication':
            return $a * $b;
        case 'division':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Cannot divide by zero";
            }
        default:
            return "Invalid operation";
    }
}

$a = 10;
$b = 5;
$operation = 'addition'; // Change the operation as needed
$result = calculator($a, $b, $operation);
echo "$a $operation $b = $result\n";

// 10. Check if a person is eligible to vote
$age = 15; // Sample Input
if ($age >= 18) {
    echo "Is eligible to vote\n";
} else {
    echo "Is not eligible to vote\n";
}

// 11. Check whether a number is positive, negative, or zero
$number = -60; // Sample Input
if ($number > 0) {
    echo "Positive\n";
} elseif ($number < 0) {
    echo "Negative\n";
} else {
    echo "Zero\n";
}

// 12. Find the grade for the student based on the average score
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50]; // Sample Inputs
$average = array_sum($scores) / count($scores);

if ($average < 60) {
    echo "Grade: F\n";
} elseif ($average < 70) {
    echo "Grade: D\n";
} elseif ($average < 80) {
    echo "Grade: C\n";
} elseif ($average < 90) {
    echo "Grade: B\n";
} else {
    echo "Grade: A\n";
}

?>

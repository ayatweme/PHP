<?php

// Task 1
$colors = array('white', 'green', 'red');
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

foreach ($colors as $color) {
    $paragraph = str_replace($color, strtoupper($color), $paragraph);
}

echo "1. $paragraph<br>";

// Task 2
$colors = array('white', 'green', 'red');
echo "2. <ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";

// Task 3
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);

asort($cities);

echo "3. ";
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

// Task 4
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo "4. " . reset($color) . "<br>";

// Task 5
$array = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';
array_splice($array, $location - 1, 0, $newItem);
echo "5. " . implode(' ', $array) . "<br>";

// Task 6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
echo "6. ";
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}

// Task 7
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$averageTemperature = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowestTemperatures = array_slice($temperatures, 0, 5);
$highestTemperatures = array_slice($temperatures, -5);

echo "7. Average Temperature is: $averageTemperature<br>";
echo "List of five lowest temperatures: " . implode(', ', $lowestTemperatures) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highestTemperatures) . "<br>";

// Task 8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedArray = array_merge($array1, $array2);
echo "8. ";
print_r($mergedArray);
echo "<br>";

// Task 9
$colors = array("red", "blue", "white", "yellow");
$upperCaseColors = array_map('strtoupper', $colors);
echo "9. " . implode("<br>", $upperCaseColors) . "<br>";

// Task 10
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowerCaseColors = array_map('strtolower', $colors);
echo "10. " . implode("<br>", $lowerCaseColors) . "<br>";

// Task 11
echo "11. ";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        echo "$i, ";
    }
}
echo "<br>";

// Task 12
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$lengths = array_map('strlen', $words);
$shortestLength = min($lengths);
$longestLength = max($lengths);
echo "12. The shortest array length is $shortestLength. The longest array length is $longestLength.<br>";

// Task 13
$uniqueRandomNumbers = array_unique(array_rand(range(11, 20), 10));
echo "13. " . implode(' ', $uniqueRandomNumbers) . "<br>";

// Task 14
$array1 = array(2, 0, 10, 12, 6);
$nonZeroIntegers = array_filter($array1, function ($value) {
    return is_int($value) && $value !== 0;
});
$lowestNonZeroInteger = min($nonZeroIntegers);
echo "14. $lowestNonZeroInteger<br>";

?>

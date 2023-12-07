<?php

// 1. Check if the inserted number is a prime number
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 3;
if (isPrime($number)) {
    echo "1."."$number is a prime number\n".'<br>';
} else {
    echo  "1."."$number is not a prime number\n".'<br>';
}

// 2. Reverse a string
$inputString = "remove"; 
$reversedString = strrev($inputString);
echo "2."."Reversed String: $reversedString\n".'<br>';

// 3. Check if all string characters are lowercase
$inputString = "remove"; 
if (ctype_lower($inputString)) {
    echo  "3."."Your String is OK\n"."<br>";
} else {
    echo "3."."Your String is not all lowercase\n"."<br>";
}

// 4. Swap two variables
$x = 12;
$y = 10;
$temp = $x;
$x = $y;
$y = $temp;
echo "4."."Swapped variables: x=$x, y=$y\n"."<br>" ;

// 5. Swap two variables using list()
$x = 12;
$y = 10;
list($x, $y) = array($y, $x);
echo "5. "."Swapped variables using list(): x=$x, y=$y\n"."<br>" ;

// 6. Check if a number is an Armstrong number
function isArmstrong($num) {
    $originalNum = $num;
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit ** 3;
        $num = (int)($num / 10);
    }
    return $originalNum == $sum;
}

$armstrongNumber = 407; 
if (isArmstrong($armstrongNumber)) {
    echo "6. "."$armstrongNumber is Armstrong Number\n"."<br>" ;
} else {
    echo "6. "."$armstrongNumber is not Armstrong Number\n"."<br>" ;
}

// 7. Check if a passed string is a palindrome
function isPalindrome($str) {
    $cleanedStr = preg_replace("/[^a-zA-Z0-9]/", "", $str);
    $cleanedStr = strtolower($cleanedStr);
    $reversedStr = strrev($cleanedStr);
    return $cleanedStr == $reversedStr;
}

$palindromeString = "Eva, can I see bees in a cave?"; 
if (isPalindrome($palindromeString)) {
    echo "7. "."Yes, it is a palindrome\n"."<br>" ;
} else {
    echo "7."."No, it is not a palindrome\n"."<br>" ;
}

// 8. Remove duplicates from an array
$array1 = array(2, 4, 7, 4, 8, 4); 
$array1 = array_unique($array1);
print_r($array1) ;

?>

<?php

// 1. Display numbers 1-10 with dashes
echo "1. ".implode('-', range(1, 10)) . "\n"."<br>";

// 2. Add all integers between 0 and 30
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "2. Total: $total\n"."<br>";

// 3. Generate a pattern using nested for loop
$rows = 5;
for ($i = 0; $i < $rows; $i++) {
    $char = 'A';
    for ($j = 0; $j <= $i; $j++) {
        echo $char . ' ';
        $char++;
    }
    echo "\n";  
}

echo "<br>";
// 4. Generate another pattern using nested for loop
$rows = 5;
$num = 1;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "$num ";
        $num++;
    }
    echo "\n";
}

// 5. Generate a different pattern using nested for loop
$rows = 5;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($i == $j) {
            echo ($i + 1) . ' ';
        } else {
            echo '0 ';
        }
    }
    echo "\n";
}

// 6. Calculate and print the factorial of a number (5)
$factorial = 1;
$num = 5;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "Factorial of $num: $factorial\n";

// 7. Calculate and print the Fibonacci sequence
$terms = 10;
$a = 0;
$b = 1;
for ($i = 0; $i < $terms; $i++) {
    echo "$a ";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
echo "\n";

// 8. Count the "c" characters in the text "Orange Coding Academy"
$text = "Orange Coding Academy";
$count = substr_count($text, "c");
echo "Count of 'c': $count\n";

// 9. Create a table using for loops
echo '<table cellpadding="3px" cellspacing="0px" border="1">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo "<td>$i * $j = $result</td>";
    }
    echo '</tr>';
}
echo '</table>';

// 10. FizzBuzz program
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}

// 11. Generate Floyd's triangle
$n = 5;
$num = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "\n";
}

// 12. Print a pattern
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo chr(64 + $k) . " ";
    }
    echo "\n";
}

?>

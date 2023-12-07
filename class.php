<?php
class Simple {
    public function __construct() {
        echo 'MyClass class has initialized!';
    }
}

class Greeting {
    public function sayHello($name) {
        echo "Hello All, I am $name";
    }
}

class Factorial {
    public function calculateFactorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * $this->calculateFactorial($n - 1);
        }
    }
}

class ArraySorter {
    public function sortArray($array) {
        sort($array);
        return $array;
    }
}

class DateDifference {
    public function calculateDateDifference($date1, $date2) {
        $diff = date_diff(date_create($date1), date_create($date2));
        echo "Difference: " . $diff->format('%y years, %m months, %d days') . PHP_EOL;
    }
}

// Task 1: Instantiate and display MyClass
$obj = new Simple();
echo PHP_EOL;

// Task 2: Instantiate and display Greeting
$greet = new Greeting();
$greet->sayHello('Scott');
echo PHP_EOL;

// Task 3: Instantiate and calculate factorial
$factorial = new Factorial();
$result = $factorial->calculateFactorial(5);
echo "Factorial: $result" . PHP_EOL;
echo PHP_EOL;

// Task 4: Instantiate and sort an array
$sorter = new ArraySorter();
$sampleArray = array(11, -2, 4, 35, 0, 8, -9);
$resultArray = $sorter->sortArray($sampleArray);
echo "Sorted Array: ";
print_r($resultArray);
echo PHP_EOL;
echo PHP_EOL;

// Task 5: Instantiate and calculate date difference
$dateDifference = new DateDifference();
$date1 = '1981-11-03';
$date2 = '2013-09-04';
$dateDifference->calculateDateDifference($date1, $date2);
echo PHP_EOL;

// Task 6: Convert a string to Date and DateTime
$dateString = '12-08-2004';

// Convert to Date format (d-m-Y)
$date = DateTime::createFromFormat('d-m-Y', $dateString);
echo 'Date format: ' . $date->format('Y-m-d') . PHP_EOL;

// Convert to DateTime format (m/d/Y)
$dateTime = DateTime::createFromFormat('d-m-Y', $dateString);
echo 'DateTime format: ' . $dateTime->format('Y-m-d') . PHP_EOL;
?>

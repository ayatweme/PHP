<?php
// Task 1
$inputString = "Random String";
echo "a. " . strtoupper($inputString) . "<br>";
echo "b. " . strtolower($inputString) . "<br>";
echo "c. " . ucfirst($inputString) . "<br>";
echo "d. " . ucwords($inputString) . "<br>";

// Task 2
$numericString = '085119';
echo "2. " . substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2) . "<br>";

// Task 3
$sentence = 'I am a full stack developer at orange coding academy';
$specificWord = 'Orange';
if (stripos($sentence, $specificWord) !== false) {
    echo "3. Word Found!<br>";
} else {
    echo "3. Word Not Found!<br>";
}

// Task 4
$url = 'www.orange.com/index.php';
$fileName = basename($url);
echo "4. " . $fileName . "<br>";

// Task 5
$email = 'info@orange.com';
$username = strtok($email, '@');
echo "5. " . $username . "<br>";

// Task 6
$inputString = 'info@orange.com';
echo "6. " . substr($inputString, -3) . "<br>";

// Task 7
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$password = '';
for ($i = 0; $i < 8; $i++) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
}
echo "7. " . $password . "<br>";

// Task 8
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
$newSentence = preg_replace('/^\w+/', $newWord, $sentence);
echo "8. " . $newSentence . "<br>";

// Task 9
$string1 = 'dragonball';
$string2 = 'dragonboll';
$position = strspn($string1 ^ $string2, "\0");
$char1 = substr($string1, $position, 1);
$char2 = substr($string2, $position, 1);
echo "9. First difference between two strings at position $position: \"$char1\" vs \"$char2\"<br>";

// Task 10
$inputString = "Twinkle, twinkle, little star.";
$stringArray = explode(" ", $inputString);
echo "10. ";
var_dump($stringArray);
echo "<br>";

// Task 11
$character = 'a';
echo "11. " . ++$character . "<br>";

// Task 12
$originalString = 'The brown fox';
$insertString = 'quick';
$position = strpos($originalString, 'brown');
$newString = substr_replace($originalString, $insertString . ' ', $position, 0);
echo "12. " . $newString . "<br>";

// Task 13
$numericString = '0000657022.24';
$cleanedNumber = ltrim($numericString, '0');
echo "13. " . $cleanedNumber . "<br>";

// Task 14
$originalString = 'The quick brown fox jumps over the lazy dog';
$removeString = 'fox';
$newString = str_replace($removeString, '', $originalString);
echo "14. " . $newString . "<br>";

// Task 15
$originalString = 'The quick brown fox jumps over the lazy dog---';
$newString = rtrim($originalString, '-');
echo "15. " . $newString . "<br>";

// Task 16
$originalString = '\"\1+2/3*2:2-3/4*3';
$cleanedString = preg_replace('/[^0-9 ]/', '', $originalString);
echo "16. " . $cleanedString . "<br>";

// Task 17
$originalString = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $originalString);
$selectedWords = implode(' ', array_slice($words, 0, 5));
echo "17. " . $selectedWords . "<br>";

// Task 18
$numericString = '2,543.12';
$cleanedString = str_replace(',', '', $numericString);
echo "18. " . $cleanedString . "<br>";

// Task 19
echo "19. ";
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . ' ';
}
echo "<br>";
?>

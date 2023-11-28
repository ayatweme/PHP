<?php
// Display PHP version and configuration information
phpinfo();

// Display the given strings
echo "Tomorrow I'll learn PHP global variables.<br>";
echo "This is a bad command: del c:\\*. *";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    
    <!-- HTML Form -->
    <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 
$clientIP = $_SERVER['REMOTE_ADDR'];

// Display the client's IP address
echo "Client's IP Address: $clientIP";


$currentFile = basename($_SERVER['PHP_SELF']);

// Display the current file name
echo "Current File Name: $currentFile";

$url = "https://www.w3schools.com/php/default.asp";

// Parse the URL
$parsedUrl = parse_url($url);

// Display the components of the URL
echo "Scheme: " . $parsedUrl['scheme'] . "<br>";
echo "Host: " . $parsedUrl['host'] . "<br>";
echo "Path: " . $parsedUrl['path'] . "<br>";
// echo "Query: " . $parsedUrl['query'] . "<br>";
// echo "Fragment: " . $parsedUrl['fragment'] . "<br>";

$sampleString = "PHP Tutorial";
$words = explode(" ", $sampleString);

foreach ($words as &$word) {
    $firstChar = mb_substr($word, 0, 1); // Get the first character
    $restOfString = mb_substr($word, 1); // Get the rest of the string
    $coloredWord = "<span style='color: red;'>$firstChar</span>$restOfString";
    $word = $coloredWord;
}

$coloredString = implode(" ", $words);

// Display the colored string
echo $coloredString;


// header("Location: https://www.w3schools.com/");
// exit(); 
?>
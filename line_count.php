<?php
// Start the session
session_start();

// File to count lines
$filename = 'code.php';

// Read the file into an array and count lines
$lines = file($filename);

// count lines with the count func
$lineCount = count($lines);

// Store data in session
$_SESSION['lineCount'] = $lineCount;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Count</title>
</head>
<body>
    <p>Number of lines: <?php echo $lineCount; ?></p>
</body>
</html>

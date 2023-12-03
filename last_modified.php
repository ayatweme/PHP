<?php
// Start the session
session_start();

// File to get last modified information
$filename = 'code.php';

// Get last modified information
$lastModified = date("l, jS F, Y, h:ia", filemtime($filename));

// Store data in session
$_SESSION['lastModified'] = $lastModified;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Modified Information</title>
</head>
<body>
    <p>Last modified: <?php echo $lastModified; ?></p>
</body>
</html>

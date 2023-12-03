<?php
// Start the session
session_start();

// Data to be displayed in the table
$data = array(
    'A' => '1000$',
    'B' => '1200$',
    'C' => '1400$'
);

// Store data in session
$_SESSION['tableData'] = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Display</title>
</head>
<body>
    <table border="1">
        <?php
        // Display data in a table
        foreach ($data as $key => $value) {
            echo "<tr><td>Salary of Mr. $key is:</td><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>

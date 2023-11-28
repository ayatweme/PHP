<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user's name from the form
    $userName = $_POST["name"];

    // Display the entered name using PHP echo statement
    echo  $userName;
    // header("Location: index.php");
}
?>

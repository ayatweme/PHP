<?php
if(isset($_POST['task1'])){
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "Data received using POST method.";
} else {
    echo "Data received using GET method.";
}
}
else{


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $url = $_GET["url"];
    header("Location: $url");
    exit();
}
}
?>

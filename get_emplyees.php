<?php

include('connect.php');

try {
    // Check if the 'id' parameter is set in the POST request
    if(isset($_POST['id']) && $_POST['id'] != '') {
        // Use a prepared statement to avoid SQL injection
        $query = "SELECT * FROM employees WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();
    } else {
        // No 'id' parameter provided, retrieve all employees
        $query = "SELECT * FROM employees WHERE 1";
        $stmt = $pdo->query($query);
    }

    // Fetch all rows as an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the result as JSON
    echo json_encode($result);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection (optional if you don't need to use $pdo further)
$pdo = null;

?>

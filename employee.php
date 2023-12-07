<?php 
include('connect.php');
$name=str_replace("'","\'",$_POST['name']);
$address=str_replace("'","\'",$_POST['address']);
$salary=str_replace("'","\'",$_POST['salary']);
$id = $_POST['id'];

if(isset($_POST['add'])){
    $insertEmployee = "INSERT INTO employees (`name`, `address`, `salary`) VALUES (:name, :address, :salary)";
        try {
        $stmt = $pdo->prepare($insertEmployee);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_INT);
        $stmt->execute();
        
        echo "Employee added successfully!";
        $_SESSION['success_add']=1;
        

        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        $_SESSION['error']=1;
 
    }
    
 
}elseif (isset($_POST['update'])) {
  $id=$_POST['primaryId'];

    // Update query
    $updateEmployee = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id = :id";

    try {
        $stmt = $pdo->prepare($updateEmployee);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':salary', $salary, PDO::PARAM_INT);
        $stmt->execute();

        echo "Employee updated successfully!";
        // die;
        $_SESSION['success_update'] = 1;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        $_SESSION['error'] = 1;
    }
}elseif (isset($_POST['delete'])) {

    // Delete query
    $deleteEmployee = "DELETE FROM employees WHERE id = :id";

    try {
        $stmt = $pdo->prepare($deleteEmployee);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "Employee deleted successfully!";
        $_SESSION['success_delete'] = 1;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        $_SESSION['error'] = 1;
    }
}
   // Close the connection
   $pdo = null;
header("location:". $_SERVER['HTTP_REFERER']);

?>
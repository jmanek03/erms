<?php
require_once 'database.php';

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Received user_id: " . $_GET['id'];
// Get the ID of the record to delete
$id = $_GET['id'];

// Query to delete the record
$query = "DELETE FROM signup WHERE user_id =?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();

// Check if the deletion was successful
if ($stmt->affected_rows > 0) {
    header("location:superadmin.php");
} else {
    echo "Error deleting record: ". $stmt->error;
}

// Close connection
$conn->close();

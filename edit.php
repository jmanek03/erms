<?php
require_once 'database.php';

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Get the ID of the record to edit
$id = $_GET['id'];

// Query to retrieve the record
$query = "SELECT * FROM signup WHERE user_id =?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the record exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Record not found";
    exit;
}

// Edit button clicked
if (isset($_POST['edit'])) {
    $userType = $_POST['userType'];

    // Update query
    $query = "UPDATE signup SET userType =? WHERE user_id =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $userType, $id);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: ". $stmt->error;
    }
}

// Close connection
$conn->close();
?>

<!-- HTML form to edit the record -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $id;?>" method="post">
    <label for="userType">UserType:</label>
    <input type="text" id="userType" name="userType" value="<?php echo $row['userType'];?>"><br><br>
    <input type="submit" name="edit" value="Edit">
</form>
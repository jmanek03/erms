<?php
require_once 'database.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Received user_id: " . $_GET['id'];
$id = $_GET['id'];

// Get the ID of the record to edit
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Check if the record exists
$query = "SELECT * FROM signup WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows <= 0) {
    echo "Record not found";
    exit;
}

$row = $result->fetch_assoc();

// Check if the form was submitted
if (isset($_POST['edit'])) {
    // Validate user input
    $userType = filter_input(INPUT_POST, 'userType', FILTER_SANITIZE_STRING);
    if (!$userType) {
        echo "Invalid user type";
        exit;
    }

    // Update query
    $query = "UPDATE signup SET userType = ? WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $userType, $id);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        header("location:superadmin.php");
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

// Close connection
$conn->close();
?>

<!-- HTML form to edit the record -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?id=<?php echo $id;?>" method="post">
    <label for="userType">UserType:</label>
    <input type="text" id="userType" name="userType" value="<?php echo htmlspecialchars($row['userType']);?>"><br><br>
    <input type="submit" name="edit" value="Edit">
</form>
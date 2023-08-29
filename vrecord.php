<?php
include 'database.php';

// Get ID to update from the form
$updateId = $_POST['update_id'];

// Query to retrieve existing data based on ID
$query = "SELECT * FROM management WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $updateId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Display the existing data and allow updates
    echo '<form action="urecord.php" method="post">';
    echo 'Name: <input type="text" name="name" value="' . $row['name'] . '"><br>';
    echo 'Number: <input type="text" name="number" value="' . $row['number'] . '"><br>';
    echo 'Email: <input type="email" name="email" value="' . $row['email'] . '"><br>';
    echo 'ID: <input type="text" name="id" value="' . $row['id'] . '" readonly><br>';
    echo '<input type="submit" value="Update">';
    echo '</form>';
} else {
    echo "No data found for the given ID.";
}

// Close the connection
$stmt->close();
$conn->close();
?>
<html>
    <body>
<a href="homepage.php">Back</a>
    </body>
</html>
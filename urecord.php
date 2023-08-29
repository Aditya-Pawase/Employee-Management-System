<?php
include 'database.php';

// Get updated data from the form
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$id = $_POST['id'];

// Query to update data based on ID
$query = "UPDATE management SET name=?, number=?, email=? WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssi", $name, $number, $email, $id);
$stmt->execute();

echo "Record updated successfully.";
// Close the connection
$stmt->close();
$conn->close();
?>
<html>
    <body>
<a href="homepage.php">Back</a>
    </body>
</html>